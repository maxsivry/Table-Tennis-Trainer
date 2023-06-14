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
    <h1>What is your robot seeing?</h1>
    <h2>{{name}}'s Table Tennis Robot</h2>
 </header>

 <nav>
    <a href="/">Welcome</a>
    <a href="/detail.php">Live feed</a>
    <a href="/form.php">Connect Your Robot!</a>
 </nav>

<main class="detail">
    <section>
        <div class="title-and-stream">
            <h1>Watch the live feed from the webcam!</h1>
        </div> 
	<div class="title-and-stream">

    <!-- Video live stream from MotionPlus package -->
   <iframe src="http://10.245.181.141:8081" width="640" height="480"></iframe>
	</div>
    </section> 
</main>
<footer>
    <p><a href="index.php">Home</a></p>
</footer>
</body>
</html>
