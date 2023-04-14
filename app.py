from flask import Flask, render_template, request, redirect, url_for
from flask_mysqldb import MySQL

app = Flask(__name__)

# Configure MySQL
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'yourpassword'
app.config['MYSQL_DB'] = 'yourdatabasename'

# Initialize MySQL
mysql = MySQL(app)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # Handle login and signup form submission
        # You can access form data using request.form
        return redirect(url_for('dashboard'))
    return render_template('Login.html')

@app.route('/dashboard')
def dashboard():
    # Query the database and render the dashboard template
    return render_template('dashboard.html')

if __name__ == '__main__':
    app.run(debug=True)
