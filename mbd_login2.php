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
 text-align: left;}
 table{
 margin: 25px;
 border-collapse: collapse;
 border: solid black 1px; padding: 10px;
 }
 td{
	 text-align:center;
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
    background-color: transparent;
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
	width:200px;
    height: 50px;
	resize:none;
	border:none;
	border-bottom: 2px solid black;
    background-color: #bbb;
}
a:hover{
background-color:lightgray;
}


	.coll {
    background-color: #777;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 400%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
	}

	.active, .coll:hover {
    background-color: #555;
	}

	.content {
	width: 400%;
    padding:0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
	}


</style>
</head>
<body style="font-family:'rockwell';background-attachment: fixed; background-size: cover;" background="back.jpg" >

<!--Navbar with tabs-->
  <div  class="navbar" style="position: fixed; top: 0;  width: 100%;">

	<div  style="border:solid #333; background-color: #333; font-family:rockwell; font-size:30px; padding:10px; color:white; text-align:center;">MineMICRONET</div>

</div>
<!--Navbar with tabs ends-->

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
<div class="navbar" style="position: fixed; width:100%; top: 55px; font-family: rockwell;" >
<a href="#requests" > REQUESTS </a>

 </div>

<p id="requests"> hello </p>
<br><br><br>


<?php

	 echo '<ul >
	   <li  style="padding: 10px; ">
<div class="coll" style="background-color:GREY; padding:10px; border: 1px solid black;">PENDING REQUESTS</div>
      <div class="content">';
	  $sql='Select * from mbd where status=0;';
$run_query=mysqli_query($con,$sql);
if(mysqli_num_rows($run_query)==0)
{
	echo "No results to show";
}
else{

echo "<table >
<TR>
<TH> S.NO.</TH>
<th>MINING BACTERIA</th>
<th>MORPHOLOGICAL CHARACTERISTICS</TH>
<th>METHYL RED</TH>
<TH>CATALASE</TH>
<TH>INDOLE</TH>
<th>SALINITY</th>
<th>UREASE</TH>
<th>GELATIN HYDROLYSIS</TH>
<TH>OXIDASE</TH>
<TH>CITRATE</TH>
<th>VOGES PROSKAUER</th>
<th>HYDROGEN PRODUCTION</TH>
<th>TRIPLE SUGAR ION</TH>
<TH>IRON OXIDATION TEST</TH>
<TH>SULPHUR OXIDATION</TH>
<th>GLUCOSE AND YEAST EXTRACT UTILISATION</th>
<th>STARCH HYDROLYSIS</TH>
<th>TOXICITY TEST</TH>
<TH>ESCULIN HYDROLYSIS</TH>
<TH>NITRATE PRODUCTION</TH>
<th>NITRATE REDUCTION</th>
<th>GLUCOSE</TH>
<th>LACTOSE</TH>
<TH>GERM TUBE TEST</TH>
<TH>TREHALOSE ASSIMILATION</TH>
<th>MALTOSE ASSIMILATION</th>
<th>CARBON SOURCE</TH>
<th>L-RHAMNOSE ASSIMILATION</TH>
<TH>CULTURE MEDIA</TH>
<TH>MOLECULAR STUDY</TH>
<th>TYPE OF BACTERIA</th>
<th>APPLICATIONS</TH>
<th>REFERENCES</TH>
<th>COUNTRY</TH>
<TH>ACTION</TH>
</TR>";
$i=1;
while($row=mysqli_fetch_row($run_query))
{
	echo"
	<tr>
	<td>".$i."</td>
	<td>".$row[0]."</td>
	<td>".$row[1]."</td>
	<td>".$row[2]."</td>
	<td>".$row[3]."</td>
	<td>".$row[4]."</td>
	<td>".$row[5]."</td>
	<td>".$row[6]."</td>
	<td>".$row[7]."</td>
	<td>".$row[8]."</td>
	<td>".$row[9]."</td>
	<td>".$row[10]."</td>
	<td>".$row[11]."</td>
	<td>".$row[12]."</td>
	<td>".$row[13]."</td>
	<td>".$row[14]."</td>
	<td>".$row[15]."</td>
	<td>".$row[16]."</td>
	<td>".$row[17]."</td>
	<td>".$row[18]."</td>
	<td>".$row[19]."</td>
	<td>".$row[20]."</td>
	<td>".$row[21]."</td>
	<td>".$row[22]."</td>
	<td>".$row[23]."</td>
	<td>".$row[24]."</td>
	<td>".$row[25]."</td>
	<td>".$row[26]."</td>
	<td>".$row[27]."</td>
	<td>".$row[28]."</td>
	<td>".$row[29]."</td>
	<td>".$row[30]."</td>
	<td>".$row[31]."</td>
	<td>".$row[32]."</td>
	<td>".$row[33]."</td>";
	?>


	 <td> <button type="button"  style="width:100px; height:50px; padding:10px;" id="pend1<?php echo $i; ?>" value="<?php echo $row[0]; ?>" onclick="action(0,1,<?php echo $i; ?>);" > APPROVE </button>
	  <button type="button"  style="width:100px; height:50px; padding:10px;" id="pend2<?php echo $i; ?>" value="<?php echo $row[0]; ?>" onclick="action(0,-1,<?php echo $i; ?>);"> DECLINE </button></td>
	</tr>
	<?php
	$i=$i+1;

}

echo '</table>';

	  echo '</div>
	  </li>';
}
	  echo '<li  style="padding: 10px; ">
<div class="coll" style="background-color:GREY; padding:10px; border: 1px solid black;">ACCEPTED REQUESTS</div>
      <div class="content">';
		//$sql='Select * from mbd where status=1 AND user_mail_id is not null;';
		$sql='Select * from mbd where status=1';
$run_query=mysqli_query($con,$sql);

if(mysqli_num_rows($run_query)==0)
{
	echo"No results to show";
}
else{
echo "<table >
<TR>
<TH> S.NO.</TH>
<th>MINING BACTERIA</th>
<th>MORPHOLOGICAL CHARACTERISTICS</TH>
<th>METHYL RED</TH>
<TH>CATALASE</TH>
<TH>INDOLE</TH>
<th>SALINITY</th>
<th>UREASE</TH>
<th>GELATIN HYDROLYSIS</TH>
<TH>OXIDASE</TH>
<TH>CITRATE</TH>
<th>VOGES PROSKAUER</th>
<th>HYDROGEN PRODUCTION</TH>
<th>TRIPLE SUGAR ION</TH>
<TH>IRON OXIDATION TEST</TH>
<TH>SULPHUR OXIDATION</TH>
<th>GLUCOSE AND YEAST EXTRACT UTILISATION</th>
<th>STARCH HYDROLYSIS</TH>
<th>TOXICITY TEST</TH>
<TH>ESCULIN HYDROLYSIS</TH>
<TH>NITRATE PRODUCTION</TH>
<th>NITRATE REDUCTION</th>
<th>GLUCOSE</TH>
<th>LACTOSE</TH>
<TH>GERM TUBE TEST</TH>
<TH>TREHALOSE ASSIMILATION</TH>
<th>MALTOSE ASSIMILATION</th>
<th>CARBON SOURCE</TH>
<th>L-RHAMNOSE ASSIMILATION</TH>
<TH>CULTURE MEDIA</TH>
<TH>MOLECULAR STUDY</TH>
<th>TYPE OF BACTERIA</th>
<th>APPLICATIONS</TH>
<th>REFERENCES</TH>
<th>COUNTRY</TH>
<TH>ACTION</TH>
</TR>";
$i=1;
while($row2=mysqli_fetch_row($run_query))
{
	echo"
	<tr>
	<td>".$i."</td>
	<td>".$row2[0]."</td>
	<td>".$row2[1]."</td>
	<td>".$row2[2]."</td>
	<td>".$row2[3]."</td>
	<td>".$row2[4]."</td>
	<td>".$row2[5]."</td>
	<td>".$row2[6]."</td>
	<td>".$row2[7]."</td>
	<td>".$row2[8]."</td>
	<td>".$row2[9]."</td>
	<td>".$row2[10]."</td>
	<td>".$row2[11]."</td>
	<td>".$row2[12]."</td>
	<td>".$row2[13]."</td>
	<td>".$row2[14]."</td>
	<td>".$row2[15]."</td>
	<td>".$row2[16]."</td>
	<td>".$row2[17]."</td>
	<td>".$row2[18]."</td>
	<td>".$row2[19]."</td>
	<td>".$row2[20]."</td>
	<td>".$row2[21]."</td>
	<td>".$row2[22]."</td>
	<td>".$row2[23]."</td>
	<td>".$row2[24]."</td>
	<td>".$row2[25]."</td>
	<td>".$row2[26]."</td>
	<td>".$row2[27]."</td>
	<td>".$row2[28]."</td>
	<td>".$row2[29]."</td>
	<td>".$row2[30]."</td>
	<td>".$row2[31]."</td>
	<td>".$row2[32]."</td>
	<td>".$row2[33]."</td>";
	?>

	 <td> <button type="button"  style="width:100px; height:50px; padding:10px;" id="app1<?php echo $i;?>" value="<?php echo $row2[0]; ?>" onclick="action(1,-1,<?php echo $i; ?>);"> DECLINE </button>
	  		<button type="button"  style="width:100px; height:50px; padding:10px;" id="app2<?php echo $i;?>" value="<?php echo $row2[0]; ?>" onclick="action(1,0,<?php echo $i; ?>);" > MOVE TO PENDING </button></td>
	</tr>




	<!--td> <button type="button"  style="width:100px; height:50px; padding:10px;" id="app1'.$i.'" value="'.$row2[0].'" onclick="action(1,-1,'.$i.');" > DECLINE </button>
	  <button type="button"  style="width:100px; height:50px; padding:10px;" id="app2'.$i.'" value="'.$row2[0].'" onclick="action(1,0);" > MOVE TO PENDING </button></td>
	</tr>--->



	<?php
	$i=$i+1;
}
 echo '</table>';

	  echo '</div>
	  </li>';
}
	  	  echo '<li  style="padding: 10px; ">
<div class="coll" style="background-color:GREY; padding:10px; border: 1px solid black;">DECLINED REQUESTS</div>
      <div class="content">';
	 $sql='Select * from mbd where status=-1;';
	 $i=1;
$run_query=mysqli_query($con,$sql);

if(mysqli_num_rows($run_query)==0)
{
	echo "No results to show";
}
else{
echo "<table >
<TR>
<TH> S.NO.</TH>
<th>MINING BACTERIA</th>
<th>MORPHOLOGICAL CHARACTERISTICS</TH>
<th>METHYL RED</TH>
<TH>CATALASE</TH>
<TH>INDOLE</TH>
<th>SALINITY</th>
<th>UREASE</TH>
<th>GELATIN HYDROLYSIS</TH>
<TH>OXIDASE</TH>
<TH>CITRATE</TH>
<th>VOGES PROSKAUER</th>
<th>HYDROGEN PRODUCTION</TH>
<th>TRIPLE SUGAR ION</TH>
<TH>IRON OXIDATION TEST</TH>
<TH>SULPHUR OXIDATION</TH>
<th>GLUCOSE AND YEAST EXTRACT UTILISATION</th>
<th>STARCH HYDROLYSIS</TH>
<th>TOXICITY TEST</TH>
<TH>ESCULIN HYDROLYSIS</TH>
<TH>NITRATE PRODUCTION</TH>
<th>NITRATE REDUCTION</th>
<th>GLUCOSE</TH>
<th>LACTOSE</TH>
<TH>GERM TUBE TEST</TH>
<TH>TREHALOSE ASSIMILATION</TH>
<th>MALTOSE ASSIMILATION</th>
<th>CARBON SOURCE</TH>
<th>L-RHAMNOSE ASSIMILATION</TH>
<TH>CULTURE MEDIA</TH>
<TH>MOLECULAR STUDY</TH>
<th>TYPE OF BACTERIA</th>
<th>APPLICATIONS</TH>
<th>REFERENCES</TH>
<th>COUNTRY</TH>
<TH>ACTION</TH>
</TR>";

while($row3=mysqli_fetch_row($run_query))
{
	echo"
	<tr>
	<td>".$i."</td>
	<td>".$row3[0]."</td>
	<td>".$row3[1]."</td>
	<td>".$row3[2]."</td>
	<td>".$row3[3]."</td>
	<td>".$row3[4]."</td>
	<td>".$row3[5]."</td>
	<td>".$row3[6]."</td>
	<td>".$row3[7]."</td>
	<td>".$row3[8]."</td>
	<td>".$row3[9]."</td>
	<td>".$row3[10]."</td>
	<td>".$row3[11]."</td>
	<td>".$row3[12]."</td>
	<td>".$row3[13]."</td>
	<td>".$row3[14]."</td>
	<td>".$row3[15]."</td>
	<td>".$row3[16]."</td>
	<td>".$row3[17]."</td>
	<td>".$row3[18]."</td>
	<td>".$row3[19]."</td>
	<td>".$row3[20]."</td>
	<td>".$row3[21]."</td>
	<td>".$row3[22]."</td>
	<td>".$row3[23]."</td>
	<td>".$row3[24]."</td>
	<td>".$row3[25]."</td>
	<td>".$row3[26]."</td>
	<td>".$row3[27]."</td>
	<td>".$row3[28]."</td>
	<td>".$row3[29]."</td>
	<td>".$row3[30]."</td>
	<td>".$row3[31]."</td>
	<td>".$row3[32]."</td>
	<td>".$row3[33]."</td>";

		//$n=$row3[0];
		//$a=Array("Prachi","Kinnri");
		//$t=substr_replace($n,$a[0],0);
		//echo $t;



?>


	<td>
	  <button type="button" id="dec1<?php echo $i;?>" value="<?php echo $row3[0]; ?>" style="width:100px; height:50px; padding:10px;" onclick="action(-1,1,<?php echo $i; ?>);"> APPROVE </button>

	  <button type="button" id="dec2<?php echo $i;?>" value="<?php echo $row3[0]; ?>" style="width:100px; height:50px; padding:10px;" onclick="action(-1,0,<?php echo $i; ?>);"> MOVE TO PENDING </button></td>

	</tr>

<?php
	$i=$i+1;

}


echo '</table>';
	  echo '</div>
	  </li>';
}
echo '<li  style="padding: 10px; ">
<div class="coll" style="background-color:GREY; padding:10px; border: 1px solid black;">MESSAGES</div>
      <div class="content">';
	 $sql='SELECT * FROM user_db WHERE message IS NOT NULL ORDER BY timestamp DESC';
$run_query=mysqli_query($con,$sql);
if(mysqli_num_rows($run_query)==0)
{
	echo"No results to show";
}
else{
echo "<table >
<TR>
<TH> S.NO.</TH>
<th>TIMESTAMP</th>
<th>USER E-MAIL ID</TH>
<th>USER ID</TH>
<TH>MESSAGE</TH>
</TR>";
$i=1;
while($row4=mysqli_fetch_row($run_query))
{
	echo"
	<tr>
	<td>".$i."</td>
	<td>".$row4[3]."</td>
	<td>".$row4[1]."</td>
	<td>".$row4[0]."</td>
	<td>".$row4[2]."</td>

	</tr>";

	$i=$i+1;
}

echo '</table>';
	  echo '</div>
	  </li>';
}
	 echo '</ul>';

	 ?>

<script>
	var coll = document.getElementsByClassName("coll");
	var i;
	for (i = 0; i < coll.length; i++)
	{
		coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.maxHeight)
		{
			content.style.maxHeight = null;
		}
		else
		{
			content.style.maxHeight = content.scrollHeight + "px";
		}
	});
	}
</script>


 <script type="text/javascript">
 function action(a,b,id)
 {var name;
	 if(a==-1)
	 {
		 if(b==0)
		 {
			 name=document.getElementById("dec2"+id).value;
		 }
		 else if(b==1)
		 {
			 name=document.getElementById("dec1"+id).value;
		 }
	 }
	 else if (a==0)
	 {
	 if(b==1)
		 {
			 name=document.getElementById("pend1"+id).value;
		 }
		 else if(b==-1)
		 {
			 name=document.getElementById("pend2"+id).value;
		 }
	 }
	 else if(a==1)
	 {
		 if(b==-1)
		 {
			 name=document.getElementById("app1"+id).value;
		 }
		 else if(b==0)
		 {
			 name=document.getElementById("app2"+id).value;
		 }

	 }

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.response;
				alert(this.response);
		   }

        };


        xmlhttp.open("GET","get1.php?action="+b+"&name="+name+"&current="+a,true);
		xmlhttp.send();
	//location.reload();
	function refreshPage() {
    //ensure reloading from server instead of cache
    location.reload(true);
};
		  window.setTimeout(refreshPage, 2000);
    }



</script>
</body>
</html>
