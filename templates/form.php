<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ url_for('static', filename='favicon.ico') }}">
    <title>{{title}}</title>
    <meta name="author" content="Max Ivry">
    <meta name="description" content="Connect the robot now and begin training!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/custom.css') }}">
    <!-- <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css"> -->

</head>

<body>
<header>
    <h1>Start your Robot!</h1>
 </header>

 <nav>
    <a href="/">Welcome</a>
    <a href="/detail.php">Live feed</a>
    <a href="/form.php">Connect Your Robot!</a>
 </nav>


<main>
    <form action="/form.php" method="POST">
    <section>
	<div class="slidecontainer">
            <legend>Select total number of machine iterations (attempted balls shot)!</legend>
                <input type="range" min="1" max="20" value="10" class="slider" id="ballCount" name="ballCount">
                <p>Value: <span id="val1"></span></p>
        <div>    
        
        <legend>Select interval of time between each shot!</legend>
        <div class="slidecontainer">
            <input type="range" min="1" max="100" value="50" class="slider" id="interval" name="interval">
            <p>Value: <span id="val2"></span></p>
        </div>
        <!-- slider code from w3 schools -->
        <script>
            var slider = document.getElementById("ballCount");
            var slider2 = document.getElementById("interval");
            var output = document.getElementById("val1");
            var output2 = document.getElementById("val2");
            output.innerHTML = slider.value;
            output2.innerHTML = slider2.value;

            slider.oninput = function() {
            output.innerHTML = this.value;
            }
            slider2.oninput = function() {
            output2.innerHTML = this.value;
            }
        </script>

        <button class="button" id="submit">Go!</button>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="/static/functions.js"></script>
    </section> 

</form>

    <section>
    <h2>Thank you</h2>
    </section>
</main>
    <footer>
        <p><a href="index.php">Home</a></p>
    </footer>

</body>
</html>
