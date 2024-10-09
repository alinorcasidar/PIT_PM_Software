<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <style>
        .sidenav a{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        :root {
            --accent-color: #ddd0c0;
            --gradient-color: #a7957d;
        }
        .sidenav {
            position: fixed;
            width: 240px;
            right: -240px; /* Change this to position the sidenav on the right */
            height: 100%;
            background-color: #fff;
            transition: all .5s ease;
        }
        .sidenav header {
            font-size: 28px;
            color: #353535;
            line-height: 70px;
            text-align: center;
            background-color: #fff;
            user-select: none;
            font-family: 'Lato', sans-serif;
        }
        .sidenav a {
            display: block;
            height: 65px;
            width: 100%;
            color: #353535;
            line-height: 65px;
            padding-left: 30px;
            box-sizing: border-box;
            border-left: 5px solid transparent;
            font-family: 'Lato', sans-serif;
            transition: all .5s ease;
        }
        .sidenav a.active, a:hover {
            border-left: 5px solid var(--accent-color);
            color: black;
            background: linear-gradient(to left, var(--accent-color), var(--gradient-color));
        }
        .sidenav a i {
            font-size: 23px;
            margin-right: 16px;
        }
        .sidenav a span {
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        #check {
            display: none;
        }
        label #btn, label #cancel {
			position: absolute;
			right: 5px; /* Keep this to align the buttons to the right */
			cursor: pointer;
			color: #fff;
			border-radius: 5px;
			margin: 15px; /* Adjusted to remove horizontal margins */
			font-size: 29px;
			background-color: #A7957D;
			box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
						inset -7px -7px 10px 0px rgba(0, 0, 0, .1),
						3.5px 3.5px 20px 0px rgba(0, 0, 0, .1),
						2px 2px 5px 0px rgba(0, 0, 0, .1);
			height: 45px;
			width: 45px;
			text-align: center;
			line-height: 45px;
			transition: all .5s ease;
		}

		label #cancel {
			opacity: 0;
			visibility: hidden;
			right: 5px; /* Ensure cancel button is also aligned to the right */
		}

        #check:checked ~ .sidenav {
            right: 0; /* Change this to show the sidenav from the right */
        }
        #check:checked ~ label #btn {
            margin-right: 245px;
            opacity: 0;
            visibility: hidden;
        }
        #check:checked ~ label #cancel {
            margin-right: 245px;
            opacity: 1;
            visibility: visible;
        }
        
        .sidenav > a.active, .sidenav > a:hover:nth-child(even) {
            --accent-color: #cfc4b5;
            --gradient-color: #a7957d;
        }
        .sidenav a.active, .sidenav > a:hover:nth-child(odd) {
            --accent-color: #e0d8cc;
            --gradient-color: #c3b5a2;
        }
        .sidenav h2 {
            position: relative;
            text-align: center;
            color: #353535;
            font-size: 60px;
            font-family: 'Lato', sans-serif;
            margin: 0;
            color: #a759f5;
        }
        .sidenav p {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            text-align: center;
            font-size: 30px;
            color: #d6adff;
            margin: 0;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidenav">
        <header>Menu</header>
        <a href="#" class="active">
            <i class="fas fa-qrcode"></i>
            <span>Dashboard</span>
        </a>
        <a href="#">
            <i class="fas fa-link"></i>
            <span>Shortcuts</span>
        </a>
        <a href="#">
            <i class="fas fa-stream"></i>
            <span>Overview</span>
        </a>
        <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Events</span>
        </a>
        <a href="#">
            <i class="far fa-question-circle"></i>
            <span>About</span>
        </a>
        <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
        </a>
        <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
        </a>
    </div>
    <div class="frame">
        <p> Responsive </p>
        <h2>SIDE BAR</h2>
        <p>in Pure CSS</p>
    </div>
    <script src="script.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>
