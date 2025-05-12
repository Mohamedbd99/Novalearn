from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from gtts import gTTS
import io
import os
from uuid import uuid4
from pathlib import Path
from dotenv import load_dotenv

# Load .env (so AUDIO_BASE_DIR can be set there)
load_dotenv()

app = FastAPI()

class TTSRequest(BaseModel):
    text: str
    lang: str = "en"  # Optional; e.g. "ar", "fr", "en"

def convert_text_to_speech(text: str, lang: str = "en") -> io.BytesIO:
    """
    Convert text -> speech bytes using gTTS.
    """
    try:
        tts = gTTS(text, lang=lang)
        buf = io.BytesIO()
        tts.write_to_fp(buf)
        buf.seek(0)
        return buf
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"TTS conversion error: {e}")

@app.post("/tts")
async def generate_tts(request: TTSRequest):
    """
    Receives {"text": "...", "lang": "en"|"fr"|"ar"},
    writes MP3 into {AUDIO_BASE_DIR}/{lang}/<uuid>.mp3,
    and returns {"message":..., "file_path":"<lang>/<uuid>.mp3"}.
    """
    # 1) Convert
    audio_stream = convert_text_to_speech(request.text, request.lang)

    # 2) Determine output folder (WSL mount of Windows C: drive)
    base_dir = Path(os.getenv(
        "AUDIO_BASE_DIR",
        "/mnt/c/Users/moham/IdeaProjects/untitled/src/main/AudioQuestion"
    ))
    out_dir = base_dir / request.lang
    out_dir.mkdir(parents=True, exist_ok=True)

    # 3) Write file
    file_name = f"{uuid4().hex}.mp3"
    full_path = out_dir / file_name
    with full_path.open("wb") as f:
        f.write(audio_stream.read())

    # 4) Return the relative path (to store in your DB as e.g. "fr/xxx.mp3")
    return {
        "message": "Audio generated and saved successfully",
        "file_path": f"{file_name}"
    }

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8002)
