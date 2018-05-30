import requests

url="https://gscicesi.herokuapp.com/api/get/updatedates"

response = request.get(url)

print response.text