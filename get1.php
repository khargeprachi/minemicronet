
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


$bacteria_name=$_GET['name'];
$action=$_GET['action'];
$current_status=$_GET['current'];

//echo $bacteria_name;
//echo $action;
echo $bacteria_name; echo"";

if($action==1)
{

	 $sql3='UPDATE mbd SET status=1 where mining_bacteria like "'.$bacteria_name.'%"';
	 $sql3=$sql3."and status=$current_status";
		 //$sql3="UPDATE mbd SET status=1 where mining_bacteria = '$bacteria_name' ";
		$run_query3=mysqli_query($con,$sql3);
		if($run_query3){echo " Request approved";}

}
else if($action==0)
{
		$sql3=' UPDATE mbd SET status=0 where mining_bacteria like "'.$bacteria_name.'%"';
		$sql3=$sql3."and status=$current_status";
		//$sql3=" UPDATE mbd SET status=0 where mining_bacteria = '$bacteria_name' ";
		//$sql3=" UPDATE mbd SET status=0 where mining_bacteria ='$bacteria_name'" ;
		$run_query3=mysqli_query($con,$sql3);
		if($run_query3){echo  " Request moved to pending";}
}

else if($action==-1)
{
		$sql3='UPDATE mbd SET status=-1 where mining_bacteria like "'.$bacteria_name.'%" ';
		$sql3=$sql3."and status=$current_status";

		//$sql3="UPDATE mbd SET status=-1 where mining_bacteria = '$bacteria_name' ";

		$run_query3=mysqli_query($con,$sql3);
		if($run_query3){echo " Request declined";}
}
  ?>
