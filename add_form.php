<!DOCTYPE html>
<html>
<head>
<title>Monet</title>
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
</head>
<body>

<?php

	$con = mysqli_connect("localhost","id5287457_gargi","gargi611");
	if(!$con)
	{
		echo 'not connected to server';
	}
	else
	{
		//echo "connected";
	}

	if(!mysqli_select_db($con,'id5287457_mbd'))
	{
		echo 'database not connected';
	}

//$data = file_get_contents( "php://input" ); //$data is now the string '[1,2,3]';

//$data = json_decode( $data );

//echo $data[0];

//header("Content-Type: application/json; charset=UTF-8");
$test_values = json_decode($_GET["tests_value"], false);

//echo $test_values[5];

$sql3='select Column_name from test_name';
$run_query3=mysqli_query($con,$sql3);
$j=0;
while($row=mysqli_fetch_row($run_query3))
{
	$test_names[$j]=$row[0];
	$j++;
}




$bname = $_GET['bname'];
$morph_char = $_GET['morph_char'];
$molecular_seq = $_GET['molecular_seq'];
$app = $_GET['app'];
$ref= $_GET['ref'];
$num=$_GET['n_tests'];
$country=$_GET['country'];
$email=$_GET['email'];
$culture_media=$_GET['culture_media'];
$bacteria_type=$_GET['bacteria_type'];


if($bname=="")

{
	echo "<div style='color:red;'>*Bacteria name  is mandatory. </div>";
}
else if($ref=="")
{
	echo "<div style='color:red;'>*References are mandatory. </div>";
}
else
	
	{
		$user_id=0;
$sql="Select * from user_db where user_mail_id='$email';";
$run_query=mysqli_query($con,$sql);
if(mysqli_num_rows($run_query)==0)
{
	$sql="Insert into user_db (user_mail_id) values ('$email');";
	$run_query2=mysqli_query($con,$sql);
}
	
	
	$sql="Select * from user_db where user_mail_id='$email';";
	$run_query1=mysqli_query($con,$sql);
	while($row2=mysqli_fetch_row($run_query1))
	{
		$user_id=$row2[0];
	}

	
$sql2="Insert into mbd values ('$bname','$morph_char',";

for ($i=0; $i<$num;$i++)
{if($test_values[$i]==1)
	{
		
	$sql2=$sql2."'+',"; 
	}
	else if($test_values[$i]==-1)
	{
		$sql2=$sql2."'-',"; 
	}
	else{
		$sql2=$sql2."'',";
	}
}

$sql2=$sql2."'$culture_media','$molecular_seq','$bacteria_type','$app','$ref','$country',0,'$user_id','$email');";
$run_query2=mysqli_query($con,$sql2);
if(!$run_query2)
{
	echo "tumse na ho paayega";
}
else
	echo "Your entry request has been submitted successfully";
	}
  ?>

	
</body>

</html>