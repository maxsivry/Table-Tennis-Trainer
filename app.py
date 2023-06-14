from flask import Flask, render_template, request, url_for, flash, redirect
# import RPi.GPIO as GPIO
import time
app = Flask(__name__)
# in1 = 14
# in2 = 15
# GPIO.setmode(GPIO.BCM)
# GPIO.setwarnings(False)
# GPIO.setup(in1, GPIO.OUT)
# GPIO.setup(in2, GPIO.OUT)
@app.route("/", methods=["GET"])
def home():
    return render_template("index.php", title="Table Tennis Robot", name="Seth and Max")

@app.route('/detail.php', methods=["GET"])
def detail():
    return render_template('detail.php', title="Table Tennis Robot", name="Seth and Max")

@app.route('/form.php', methods=('GET', 'POST'))
def form():
    if request.method == 'POST':
        button()
        return render_template("index.php", title="Table Tennis Robot", name="Seth and Max")
    else:
        return render_template('form.php', title="Table Tennis Robot", name="Seth and Max")

@app.route("/button", methods=['GET', "POST"])
def button():
    ballCount = request.form['ballCount']
    intervalNum = request.form['interval']
    motor(ballCount, intervalNum)


def motor(bc, i):
    i =int(i)/10
    for j in range(int(bc)):
        # GPIO.output(in2,GPIO.HIGH)
        # GPIO.output(in1,GPIO.HIGH)
        # time.sleep(0.05)
        # GPIO.output(in2,GPIO.LOW)
        # GPIO.output(in1,GPIO.LOW)
        # time.sleep(int(i))
        print(hello)


