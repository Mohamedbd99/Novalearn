# src/your_fastapi_app.py

from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from gtts import gTTS
import io
import os
from uuid import uuid4
from pathlib import Path
from dotenv import load_dotenv

# Load .env so AUDIO_BASE_DIR can be overridden
load_dotenv()

app = FastAPI()

class TTSRequest(BaseModel):
    text: str
    lang: str = "en"  # Optional; e.g. "ar", "fr", "en"

def convert_text_to_speech(text: str, lang: str = "en") -> bytes:
    """
    Convert text -> speech bytes using gTTS.
    """
    try:
        tts = gTTS(text, lang=lang)
        buf = io.BytesIO()
        tts.write_to_fp(buf)
        return buf.getvalue()
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"TTS conversion error: {e}")

@app.post("/tts")
async def generate_tts(request: TTSRequest):
    """
    Receives {"text":"…","lang":"en"|"fr"|"ar"},
    writes MP3 into BOTH:
      1) {AUDIO_BASE_DIR}/{lang}/<uuid>.mp3
      2) /home/bidoun/PI/Novalearn/pythonQuiz/audioGen/{lang}/<uuid>.mp3
    and returns {"message":…,"file_path":"<lang>/<uuid>.mp3"}.
    """
    # 1) Generate raw mp3 bytes
    mp3_bytes = convert_text_to_speech(request.text, request.lang)

    # 2) Primary location (from env or default Windows-mounted path)
    primary_base = Path(os.getenv(
        "AUDIO_BASE_DIR",
        "/mnt/c/Users/moham/IdeaProjects/untitled/src/main/AudioQuestion"
    ))
    primary_dir = primary_base / request.lang
    primary_dir.mkdir(parents=True, exist_ok=True)

    # 3) Secondary (new) location inside WSL
    secondary_base = Path("/home/bidoun/PI/Novalearn/public/audioGen/en")
    secondary_dir = secondary_base / request.lang
    secondary_dir.mkdir(parents=True, exist_ok=True)

    # 4) Pick a filename
    file_name = f"{uuid4().hex}.mp3"

    # 5) Write to both
    primary_path   = primary_dir   / file_name
    secondary_path = secondary_dir / file_name

    primary_path.write_bytes(mp3_bytes)
    secondary_path.write_bytes(mp3_bytes)

    # 6) Return just the subpath (store “en/xxxx.mp3” in your DB)
    return {
        "message": "Audio generated and saved to both locations",
        "file_path": f"{request.lang}/{file_name}"
    }

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8002)
