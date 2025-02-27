from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
import requests
import os
import json
from dotenv import load_dotenv

# Load environment variables from .env
load_dotenv()

app = FastAPI()

# Set your Gemini API key from an environment variable.
GEMINI_API_KEY = os.getenv("GEMINI_API_KEY")
if GEMINI_API_KEY is None:
    raise ValueError("Please set the GEMINI_API_KEY environment variable.")

class GenerationRequest(BaseModel):
    prompt: str

def clean_text(text: str) -> str:
    """
    Cleans the provided text by removing code block markers and extra whitespace.
    """
    # Debug: Print the cleaned text
    print("before cleaning:", text)
    # Remove JSON code block markers and any other backticks.
    cleaned = text.replace("```json", "").replace("```", "").strip()
    print("after cleaning:", cleaned)
    return cleaned

def call_gemini(prompt: str) -> dict:
    """
    Calls the Gemini API with the given prompt and returns the parsed JSON result.
    """
    url = f"https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={GEMINI_API_KEY}"
    headers = {"Content-Type": "application/json"}
    payload = {
        "contents": [{
            "parts": [{"text": prompt}]
        }]
    }
    
    response = requests.post(url, json=payload, headers=headers)
    if response.status_code != 200:
        raise HTTPException(status_code=response.status_code, detail=response.text)
    
    result = response.json()
    candidates = result.get("candidates", [])
    if candidates:
        candidate_content = candidates[0].get("content", "")
        # Extract the full text from the candidate response.
        if isinstance(candidate_content, dict):
            parts = candidate_content.get("parts", [])
            full_text = parts[0].get("text", "") if parts else ""
        elif isinstance(candidate_content, str):
            full_text = candidate_content
        else:
            full_text = ""
        
        # Clean the extracted text.
        cleaned_text = clean_text(full_text)
        
        # Attempt to parse the cleaned text into a JSON object.
        try:
            generated_json = json.loads(cleaned_text)
        except Exception as e:
            raise HTTPException(status_code=500, detail=f"Error parsing JSON: {e}")
    else:
        generated_json = {}
    
    return {"generated_json": generated_json, "raw_response": result}

@app.post("/generate")
async def generate_text(request: GenerationRequest):
    return call_gemini(request.prompt)

@app.get("/generate/math")
async def generate_matemath():
    fixed_prompt = (
        "Generate a JSON file containing 3 quizzes, each designed for an 8-year-old kid. "
        "Each quiz must include exactly 15 mathematical questions. For each quiz:\n\n"
        "- Assign an overall difficulty level: the first quiz should be \"facile\", the second \"normal\", and the third \"hard\".\n"
        "- Each quiz should have a unique identifier (e.g., \"quiz_id\").\n"
        "- Include a \"questions\" array that contains 15 question objects.\n"
        "- Each question object should include:\n"
        "  - A unique question identifier (e.g., \"question_id\").\n"
        "  - The math question text.\n"
        "  - The correct answer (\"correction\").\n"
        "  - Three suggestion options labeled \"a\", \"b\", and \"c\", with one of these options being the correct answer.\n\n"
        "Ensure the JSON structure is clear and well-formed."
    )
    return call_gemini(fixed_prompt)

@app.get("/generate/geo")
async def generate_geography():
    fixed_prompt = (
        "Generate a JSON file containing 3 quizzes, each designed for an 8-year-old kid. "
        "Each quiz must include exactly 15 geography questions. For each quiz:\n\n"
        "- Assign an overall difficulty level: the first quiz should be \"facile\", the second \"normal\", and the third \"hard\".\n"
        "- Each quiz should have a unique identifier (e.g., \"quiz_id\").\n"
        "- Include a \"questions\" array that contains 15 question objects.\n"
        "- Each question object should include:\n"
        "  - A unique question identifier (e.g., \"question_id\").\n"
        "  - The geography question text.\n"
        "  - The correct answer (\"correction\").\n"
        "  - Three suggestion options labeled \"a\", \"b\", and \"c\", with one of these options being the correct answer.\n\n"
        "Ensure the JSON structure is clear and well-formed."
    )
    return call_gemini(fixed_prompt)

@app.get("/generate/history")
async def generate_history():
    fixed_prompt = (
        "Generate a JSON file containing 3 quizzes, each designed for an 8-year-old kid. "
        "Each quiz must include exactly 15 history questions. For each quiz:\n\n"
        "- Assign an overall difficulty level: the first quiz should be \"facile\", the second \"normal\", and the third \"hard\".\n"
        "- Each quiz should have a unique identifier (e.g., \"quiz_id\").\n"
        "- Include a \"questions\" array that contains 15 question objects.\n"
        "- Each question object should include:\n"
        "  - A unique question identifier (e.g., \"question_id\").\n"
        "  - The history question text.\n"
        "  - The correct answer (\"correction\").\n"
        "  - Three suggestion options labeled \"a\", \"b\", and \"c\", with one of these options being the correct answer.\n\n"
        "Ensure the JSON structure is clear and well-formed."
    )
    return call_gemini(fixed_prompt)

@app.get("/generate/science")
async def generate_science():
    fixed_prompt = (
        "Generate a JSON file containing 3 quizzes, each designed for an 8-year-old kid. "
        "Each quiz must include exactly 15 science questions. For each quiz:\n\n"
        "- Assign an overall difficulty level: the first quiz should be \"facile\", the second \"normal\", and the third \"hard\".\n"
        "- Each quiz should have a unique identifier (e.g., \"quiz_id\").\n"
        "- Include a \"questions\" array that contains 15 question objects.\n"
        "- Each question object should include:\n"
        "  - A unique question identifier (e.g., \"question_id\").\n"
        "  - The science question text.\n"
        "  - The correct answer (\"correction\").\n"
        "  - Three suggestion options labeled \"a\", \"b\", and \"c\", with one of these options being the correct answer.\n\n"
        "Ensure the JSON structure is clear and well-formed."
    )
    return call_gemini(fixed_prompt)

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8001)
