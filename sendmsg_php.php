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



$email = $_GET['email'];
$msg = $_GET['msg'];
$con = mysqli_connect("localhost","root","");
if(!$con)
{
echo 'not connected to server';
}


if(!mysqli_select_db($con,'micronet'))
{
echo 'database not connected';
}
$sql="insert into user_db(user_mail_id,message) values ('$email','$msg')";
$run_query=mysqli_query($con,$sql);
if($run_query)
{
	echo "Message successfully sent.";
}
else
{
	echo "Message Sending Failed. Try again .";
}
header('refresh:3; url=sendmsg.php');


?>
