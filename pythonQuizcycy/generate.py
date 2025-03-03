# generate.py
import sys
from transformers import AutoTokenizer, AutoModelForCausalLM

def main(prompt, max_length):
    model_name = "ValueFX9507/Tifa-Deepsex-14b-CoT-GGUF-Q4"  # or any other model
    tokenizer = AutoTokenizer.from_pretrained(model_name)
    model = AutoModelForCausalLM.from_pretrained(model_name)
    inputs = tokenizer(prompt, return_tensors="pt")
    outputs = model.generate(**inputs, max_length=int(max_length))
    generated_text = tokenizer.decode(outputs[0], skip_special_tokens=True)
    print(generated_text)

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Usage: python generate.py '<prompt>' <max_length>")
    else:
        main(sys.argv[1], sys.argv[2])
