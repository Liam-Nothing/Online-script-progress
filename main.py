import requests
import ctypes
import json
import time

def setup_get():
	title = "TestScript"
	ctypes.windll.kernel32.SetConsoleTitleW(title)
	id = create_get(title)
	percent_get(id, 0)

def create_get(title):
	payload = {'title': title}
	rep = requests.get("https://nothingelse.fr/script_load/create.php", params=payload)
	return json.loads(rep.content)

def percent_get(id, percent):
	payload = {'id': id, 'p': percent}
	requests.get("https://nothingelse.fr/script_load/percent.php", params=payload)

if __name__ == "__main__":
	#script
	#percent_get(id, 0)