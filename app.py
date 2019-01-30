import flask
import bookapi
app = flask.Flask(__name__)

@app.route('/search',methods=['GET'])
def search():
    data = bookapi.get_book_list(flask.request.values.get('query'))
    return flask.jsonify(data)
