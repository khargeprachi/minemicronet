<!DOCTYPE html>
<html lang="en">
<head>
<title>MineMICRONET</title>

	<!--Initialising css folders-->
	<!--link rel="stylesheet" href="css/extra.css"-->
	<!--link rel="stylesheet" href="css/materialize.min.css"-->

	<link rel="stylesheet" href="megadropdown.css">
	<link rel="stylesheet" href="modal.css">
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
	<!--Initialising javascript folders-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.min.1.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--Initialising icon font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	.column {
    float: left;
    width: 16.66%;
    height: 100px;
	}

	th, td {
 border-bottom: 1px solid #ddd;
 border: 1px solid black;
 border-collapse:collapse;
 padding: 15px;
 text-align: left;
 }

	table{
 margin: 25px;
 border-collapse: collapse;
 border: solid black 1px; padding: 10px;
 }

	input[type=text]:focus {
    border: 3px solid #555;
	}

	ul {
  list-style-type: none;
  }

	h2{
	text-align:left; margin: 15px; padding-left:35px;
	}

	p{
	text-align:left; font-size:20px; margin: 15px; padding-left:35px;
	}

	input{
	margin-bottom: 10px;
	}

	input[type=text] {
    width: 130px;
	height: 20px;
    box-sizing: border-box;
    border:none;
	border-bottom: 1px solid black;
    font-size: 16px;
    background-color: #aaa;
	font-weight:bold;
	}

	input[type=password] {
    width: 130px;
	height: 20px;
    box-sizing: border-box;
    border:none;
	border-bottom: 2px solid black;
    font-size: 16px;
    background-color: #bbb;

	}

	select{
	width: 130px;
	height: 25px;
    box-sizing: border-box;
    border:none;
	border-bottom: 2px solid black;
    font-size: 16px;
    background-color: #bbb;
	}

	input[type=textarea] {
	width:20%;
    height: 50px;
	resize:none;
	border:none;
	border-bottom: 2px solid black;
    background-color: #aaa;
	font-weight:bold;
	}

	a:hover{
	background-color:lightgray;
	}

	.coll {
    background-color: #777;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
	}

	.active, .coll:hover {
    background-color: #555;
	}

	.content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
	}

</style>
</head>

<body style="font-family:'rockwell';background-attachment: fixed; background-size: cover;"  background="back.jpg" >



<?php
	$con = mysqli_connect("localhost","id5287457_gargi","gargi611");
	if(!$con)
	{
		echo 'not connected to server';
	}
	else
	{
		echo "connected";
	}

	if(!mysqli_select_db($con,'id5287457_mbd'))
	{
		echo 'database not connected';
	}
?>
<!--Navbar with tabs-->
	<div  class="navbar" style="position: fixed; top: 0; z-index:1; width: 100%; padding:10px;">
<a href="aboutus.html" style="float:right;">ABOUT US</a>
<a href="sendmsg.php" style="float:right;">SEND MESSAGE TO ADMIN</a>
<a href="database.php" style="float:right;" >GO TO DATABASE</a>
<a href="index.php" style="float:right;">INTRODUCTION</a>
<fig><img src='logo.png' alt="logo" style="float:left; width:150px; height:55px;"> </fig>
	<div  style="z-index:1; border:solid #333; background-color: #333; font-family:rockwell; font-size:30px;  color:white; text-align:center;">MineMICRONET</div>
	</div>
<!--Navbar with tabs ends-->



<form style="padding-left:20px; padding-top:20px;" action="sendmsg_php.php">
Enter Email Id:
<input type="text" style="width:350px;" name="email"></input><br><br>
Enter Message:
<input type="textarea" name="msg" style="width:350px;"></input><br>
<input type="submit" value="Send">
</form>
