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
        <h2>{{name}}'s Table Tennis Robot</h2>
    </header>
    <nav>
        <a href="/">Welcome</a>
        <a href="/detail.php">Live feed</a>
        <a href="/form.php">Connect Your Robot!</a>
     </nav>
        <main>    
<section>
            <h2>About the loop trainer<h2>
            <p>This robot is designed to dispense balls for improvement on stroke and timing. The robot can hold maximum 20 balls.
		To make sure its connected properly,
		check that both green lights and the Raspberry pi lights are on. To determine the speed of the motor, change the dial on the battery.
		<em>CAUTION: do not exceed 24 volts,<em> be sure to turn dial slowly. Also: please note that increasing the voltage increasees motor
		 speed.</p> 
		
        <section>
        <section class="wrapper">
            <h2>Drills</h2>
            <p>Some information on proper technique for the novice player.</p>
            <div class="columns">
                <div class="column">
                    <h3>The forehand flick:</h3>
                    <p>Step foreward under the table with right leg (for righties). Approach the ball with a neutral paddle angle. Transfer your weight from back leg to front while striking through the ball in an upward motion to generate topsin and lift. <p>
                    <p>Tip: the motion should draw a V with the paddle, dipping just before you strike the ball.</p>
                </div>
                <div class="column">
                    <h3>The push</h3>
                    <p>With same footwork as the flick, appraoch the ball with an open paddle angle and jab undder the ball. For a longer push, have a firmer grip and follow through. For a short push, have a looser grip and try to brush/ absorb contact, approaching with a very light touch. </p>
                    <p>try to hit the ball early after the bounce and angle your paddle to produce sidespin.</p>
                </div>
                <div class="column">
                    <h3>The forehand loop:</h3>
                    <p>In a squated atheltic position, feet a little past shoulder-width apart, knees bent and bending slightly forward. Load your weight on the same leg as your paddle arm, keep core tight and arm out at a slight bend. Accelerated onto the other leg while keeping core engaged.</p>
                    <p> Tip: lock your wrist in place and wait until the ball is table height.</p>
                </div>
                <div class="column">
                    <h3>The backhand loop (La Chiquita):</h3>
                    <p>For right-handed players: Bring the same foot as your paddle hand forward under the table and curl your right shoulder towards your chest. While pointing your backhand down, brush over the ball by hinging at the elbow.</p>
                    <p>Tip: accelerate through the hips and core and keep low.</p>
                </div>
            </div> 
            <p>Seth Wilbur and Max Ivry made this robot for the CS121 final, University of Vermont, 2023.</p>
        </section> 
    </main>         
</body>
</html>
