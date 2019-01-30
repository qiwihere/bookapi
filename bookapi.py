from bs4 import BeautifulSoup
from lxml import html
import requests
from urllib import parse

query = 'Девушка в поезде'
data = {
    'ask': parse.quote_plus(query)
}
r = requests.get('http://flibusta.is/booksearch', params=data)
f = r.content

soup = BeautifulSoup(f, features='lxml')
books_list = soup.find('div', {'id': 'main-wrapper'}).find('ul')

result = {}
key = 0
for book in books_list:
    try:
        href = book.find('a').get('href')
        arr_name = book.find('a').findAll('span')
        bookname = ''
        for name_part in arr_name:
            bookname += name_part.text + ' '

        author = book.findAll('a')[1].text
        book_data = dict({
            'link': href,
            'author': author,
            'bookname': bookname
        })
        result[key] = book_data
        key += 1
    except Exception:
        continue

print(result)
