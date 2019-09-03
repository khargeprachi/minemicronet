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
?>
<?php


//$data = file_get_contents( "php://input" ); //$data is now the string '[1,2,3]';

//$data = json_decode( $data );

//echo $data[0];

//header("Content-Type: application/json; charset=UTF-8");
$test_values = json_decode($_GET["tests_value"], false);

//header("Content-Type: application/json; charset=UTF-8");
$country = json_decode($_GET["country"], false);
//echo $test_values[5];
//echo $country[0];

$sql3='select Column_name from test_name';
$run_query3=mysqli_query($con,$sql3);
$j=0;
while($row4=mysqli_fetch_row($run_query3))
{
	$test_names[$j]=$row4[0];
	$j++;
}





$bname = $_GET['bname'];
$morph_char = $_GET['morph_char'];
$molecular_seq = $_GET['molecular_seq'];
$app = $_GET['app'];
$ref= $_GET['ref'];
$num=$_GET['n_tests'];
$n_country=$_GET['n_country'];
//$tests_val=$_GET['tests0'];
//echo $n_country;
//var_dump($country[0]);
//echo $country[0];
$flag=0;

for($i=0; $i<$num;$i++)
	{
		if($test_values[$i]!="")
		{
			$flag=1;
			break;
		}
	}


if($bname==""&$morph_char==""&$molecular_seq==""&$app==""&$ref==""&$n_country==0&$flag==0)

{


	echo "<h3 style='margin-left:50px; color:red;'>All fields cannot be left empty. Please enter some values to search.</h3>";
}

else

	{
$sql2='Select name from test_name';
$run_query2=mysqli_query($con,$sql2);
$j=0;
while($row2=mysqli_fetch_row($run_query2))
{
	$arr[$j]=$row2[0];
	$j++;
}
$k=0;




$i=0;
$sql='Select * from mbd where status=1 and  mining_bacteria like "%'.$bname.'%" and morph_char like "%'.$morph_char.'%"and  molecular_study like "%'.$molecular_seq.'%" and applications like "%'.$app.'%" and refernces like "%'.$ref.'%" and ';
//$sql="select * from mbd where mining_bacteria like \"%".$bname."%\" AND morph_char like \"%".$morph_char."%\"";

for ($i=0; $i<$num-1;$i++)
{   if($test_values[$i]==1)
	{

	$sql=$sql.$test_names[$i].' like "%+%" and ';
	}
	else if($test_values[$i]==-1)
	{
		$sql=$sql.$test_names[$i].' like "%-%" and ';
	}
	else{
     $sql=$sql.$test_names[$i].' like "%'.$test_values[$i].'%" and ';
	}
}
$sql=$sql.$test_names[$i].' like "%'.$test_values[$i].'%" ';


if($n_country>=1)
{
	$sql=$sql.'and ';
	$k=0;
	for($k=0; $k<$n_country-1; $k++)

{
	//echo $country[$k];
	//$sql=$sql.' and country='.$country[$k];
	//$sql=$sql.' country ="$country[$k]" OR ';
	$sql=$sql.' country like "%'.$country[$k].'%" OR ';
}
	//$sql=$sql.' country ="$country[$k]"';
	$sql=$sql.' country like "%'.$country[$k].'%"  ';
}


$run_query4=mysqli_query($con,$sql);
$num_rows=mysqli_num_rows($run_query4);
$j=0;
echo '<div id="results" style="padding-left:50px;"> <h3> SEARCH RESULTS. ( Total '.$num_rows.' Results )</H3> </div>';
echo '<ul class="collapsible" data-collapsible="accordion">';
$sr=1;
while($row=mysqli_fetch_row($run_query4))
{
	$m=0;

	echo '
    <li style="padding: 10px; ">
      <div class="active collapsible-header" style="background-color:GREY; padding:10px; border: 1px solid black;"><b>'.$sr.']<i> '.$row[0].'</i> - '.$row[1].'</b> </div>
      <div class="collapsible-body" style="background-color:lightgrey;">';

	 for($j=0;$j<6;$j++)
	 {
		 $k=5*$j+2;
		 $l=$k+5;
	 echo '<table style=" float:left;border: solid black 1px; padding: 10px;">
	 <tr>
			<th>TEST NAME</th>
			<th>TEST RESULT</th>
		</tr>';
	 	  for($i=$k;$i<$l;$i++)
		{
		if($i<=27)
		{
		echo'


		 <tr>
			<td>'.$arr[$m].'</td>
			<td>'.$row[$i].'</td>
		</tr>';
		$m++;
		}
		}
		echo '</table>';
		}

	  echo '
	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>
	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>
  	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>	  <br>

	  <h4> Culture Media: '.$row[28].' </h4>
	  <h4> Molecular Study:'.$row[29].' </h4>
	  <h4> Type of Bacteria:'.$row[30].' </h4>
	  <h4> Applications:'.$row[31].' </h4>
	  <h4> References:'.$row[32].'</h4>
	  <h4> Country:'.$row[33].'</h4>
	  </div>
    </li>';
	$sr++;
	}

  echo '</ul>';
	}
  ?>


</body>

</html>
