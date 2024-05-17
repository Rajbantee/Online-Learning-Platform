<?php 
	session_start();
	require('../Controller/header.php');
	include('../Controller/authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>

	<style>
        .course {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>

</head>
<body>

	<div class="course">
	    <h2>Featured Course: Web Development Bootcamp</h2>
	    <p>Master the fundamentals of web development with HTML, CSS, JavaScript, and more. Build responsive websites and web applications from scratch.</p>
	    <p><strong>Instructor:</strong> John Doe</p>
	    <p><strong>Rating:</strong> 4.8 (1,500+ reviews)</p>
	    <p><strong>Price:</strong> $49.99</p>
	    <a href="#">Enroll Now</a>
	</div>

	<div class="course">
	    <h2>Python Programming for Beginners</h2>
	    <p>Learn Python programming step-by-step. Start with the basics and progress to building real-world projects.</p>
	    <p><strong>Instructor:</strong> Jane Smith</p>
	    <p><strong>Rating:</strong> 4.5 (800+ reviews)</p>
	    <p><strong>Price:</strong> $29.99</p>
	    <a href="#">Enroll Now</a>
	</div>

	<div class="course">
	    <h2>Photography Masterclass: Capture Stunning Photos</h2>
	    <p>Unlock the secrets of photography. From camera settings to composition techniques, become a master photographer.</p>
	    <p><strong>Instructor:</strong> Emily Johnson</p>
	    <p><strong>Rating:</strong> 4.9 (2,000+ reviews)</p>
	    <p><strong>Price:</strong> $39.99</p>
	    <a href="#">Enroll Now</a>
	</div>

</body>
</html>