from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
import requests
import os
from dotenv import load_dotenv

load_dotenv()

app = FastAPI()

GEMINI_API_KEY = os.getenv("GEMINI_API_KEY")
if GEMINI_API_KEY is None:
    raise ValueError("Please set the GEMINI_API_KEY environment variable.")

class CourseRequest(BaseModel):
    description: str

def call_gemini(prompt: str) -> dict:
    url = (
        f"https://generativelanguage.googleapis.com/v1beta/"
        f"models/gemini-1.5-flash:generateContent?key={GEMINI_API_KEY}"
    )
    headers = {"Content-Type": "application/json"}
    payload = {
        "contents": [{
            "parts": [{
                "text": (
                    "Générez un cours éducatif détaillé en français, structuré et facile à comprendre "
                    "pour des élèves en difficulté d’apprentissage. Le cours doit inclure :\n\n"
                    "1️⃣ **Introduction** : Présentation du sujet de manière simple et engageante.\n"
                    "2️⃣ **Explication claire** : Développement progressif avec des phrases courtes et un langage accessible.\n"
                    "3️⃣ **Exemples concrets** : Illustrations et situations du quotidien pour faciliter la compréhension.\n"
                    "4️⃣ **Résumé** : Récapitulatif des points importants.\n"
                    "5️⃣ **Exercice simple** : Petite activité pour vérifier la compréhension.\n\n"
                    f"Thème du cours : {prompt}"
                )
            }]
        }]
    }
    
    response = requests.post(url, json=payload, headers=headers)
    if response.status_code != 200:
        raise HTTPException(status_code=response.status_code, detail="Error in Gemini API call")
    
    return response.json()

@app.post("/generate")
async def generate_course(course_request: CourseRequest):
    # 🔒 Permission check: must look like an education request in French
    desc = course_request.description.lower()
    keywords = ["cours", "leçon", "éducation", "apprendre", "enseigner", "étude"]
    if not any(kw in desc for kw in keywords):
        raise HTTPException(
            status_code=403,
            detail="I don't have permission to help you in this subject"
        )
    
    try:
        response = call_gemini(course_request.description)
        return response
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Internal Server Error: {e}")
