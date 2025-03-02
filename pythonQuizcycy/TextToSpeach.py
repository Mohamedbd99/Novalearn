from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from gtts import gTTS
import io
import os
from uuid import uuid4
from dotenv import load_dotenv

# Load environment variables from .env if needed (e.g., for other settings)
load_dotenv()

app = FastAPI()

class TTSRequest(BaseModel):
    text: str
    lang: str = "en"  # Optional language parameter (default is English)

def convert_text_to_speech(text: str, lang: str = "en") -> io.BytesIO:
    """
    Convert the input text into speech audio using gTTS.
    Returns an in-memory file (BytesIO) containing the MP3 audio.
    """
    try:
        tts = gTTS(text, lang=lang)
        audio_bytes = io.BytesIO()
        tts.write_to_fp(audio_bytes)
        audio_bytes.seek(0)  # Reset pointer to the start of the BytesIO object
        return audio_bytes
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Text-to-Speech conversion error: {e}")

@app.post("/tts")
async def generate_tts(request: TTSRequest):
    """
    Endpoint that accepts a JSON payload with text (and an optional language code),
    converts the text to speech, saves the audio file under the 'audioGen' folder,
    and returns the file path in a JSON response.
    """
    audio_stream = convert_text_to_speech(request.text, request.lang)
    
    # Ensure the audioGen folder exists
    audio_dir = "/home/bidoun/PI/Novalearn/public/audioGen"
    os.makedirs(audio_dir, exist_ok=True)
    
    # Generate a unique file name for the MP3 file
    file_name = f"{uuid4().hex}.mp3"
    file_path = os.path.join(audio_dir, file_name)
    
    # Save the audio stream to the file
    with open(file_path, "wb") as f:
        f.write(audio_stream.read())
    print("Current working directory:", os.getcwd())

    return {"message": "Audio generated and saved successfully", "file_path": file_name}

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8002)
