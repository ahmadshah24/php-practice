from googlesearch import Search


query = "ahmadshah baba"
try:

    for url in Search(query):
        print(url)
except e:
    print(e.getMessage())