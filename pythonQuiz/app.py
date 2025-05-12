# app.py
from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from openai import OpenAI

client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))
import os
from dotenv import load_dotenv  # Import dotenv
load_dotenv()  # This loads variables from the .env file

app = FastAPI()

# Set your OpenAI API key from an environment variable.
if openai.api_key is None:
    raise ValueError("Please set the OPENAI_API_KEY environment variable.")

class GenerationRequest(BaseModel):
    prompt: str
    max_tokens: int = 50  # Adjust this value as needed.

@app.post("/generate")
async def generate_text(request: GenerationRequest):
    try:
        # Use the prompt provided in the request
        response = client.chat.completions.create(model="gpt-4o",
        messages=[{"role": "user", "content": request.prompt}],
        max_tokens=request.max_tokens  # Use the max_tokens from the request)
        generated_text = response.choices[0].message.content.strip()
        print(generated_text)
        return {"generated_text": generated_text}
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8003)
