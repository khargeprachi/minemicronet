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
	width:200px;
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

<body style="font-family:'rockwell';background-attachment: fixed; background-size: cover;  background-color:#ddd;" >



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

	<div  style="z-index:1; border:solid #333; background-color: #333; font-family:rockwell; font-size:30px;  color:white; text-align:center;float:left;padding-left:50px;">MineMICRONET</div>

	</div>
<!--Navbar with tabs ends-->



<br><br><br><br>
<figure><img src="img1.jpg" alt="bacteria" style="float:right; padding:10px; margin:10px; margin-top:35px;"> </figure>
<div class="center black-text "  >


<h2 >INTRODUCTION</h2>

<p style="text-align:justify;">
Biomining is the process of using microorganisms (microbes) to extract metals of economic interest from rock ores or mine waste. Biomining techniques may also be used to clean up sites that have been polluted with metals.
Most current biomining operations target valuable metals like copper, uranium, nickel, and gold that are commonly found in sulfidic (sulfur-bearing) minerals. Microbes are especially good at oxidizing sulfidic minerals, converting metals like iron and copper into forms that can dissolve more easily. Other metals, like gold, are not directly dissolved by this microbial process, but are made more accessible to traditional mining techniques because the minerals surrounding these metals are dissolved and removed by microbial processes. When the metal of interest is directly dissolved, the biomining process is called “bioleaching,” and when the metal of interest is made more accessible or “enriched” in the material left behind, it is called “biooxidation.” Both processes involve microbial reactions that can happen anywhere the microbes, rocks, and necessary nutrients, like oxygen, occur together.

Extensive research has been going-on on these mining bacteria in the fields of metallurgy and biotechnology.  New high throughput sequencing techniques and molecular methods such as 16s rRna sequencing and DNA-DNA hybridisation etc. are being used to isolate and identify new strains. The results reveal that the microbial leaching communities consist of a plethora of microorganisms and the processes used by all these microorganisms during bioleaching are unique. New strains are being isolated locally and are being genetically manipulated to increase the rate of bioleaching and biooxidation and consequently there is a rapid increase in the data related to mining bacteria. Therefore, there is a necessity of an integrated database which can serve as repository for the mining bacteria and hence we created an interactive and informative web database in which the information related to these bacteria can be deposited as well as extracted.

<h2>Utility of the database:</h2>
<p style="text-align:justify;">
It is an interactive database from which users can retrieve as well as deposit data regarding mining bacteria. It will serve as a cumulated informative platform for users where they can get information regarding various mining bacteria at one place and  can refer it for further research. Since, it’s a cumulative database, the user can easily identify the domains in which a certain bacterium needs to be studied more and vice versa.

Moreover, since it’s an interactive platform, any researcher from any part of the world can access it and input their data regarding an existing bacterium in the database or create a new entry for new bacteria they have isolated from the mines. Therefore, the database can be updated from entries all over the world.


</div>



<div style="background-color: #333; position:fixed; bottom:0; font-size:25px;font-family:rockwell; padding:10px; color:white; text-align:center; width:100%; " id ="footer" class="navbar" style="color:white; ">


	<div>VIT UNIVERSITY	</div>
</div>

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


<script>

	function search()
	{
		var bname = document.forms["myForm_search"]["bname"].value;
		var morph_char = document.forms["myForm_search"]["morph_char"].value;
		var molecular_seq = document.forms["myForm_search"]["molecular_seq"].value;
		var app= document.forms["myForm_search"]["app"].value;
		var ref = document.forms["myForm_search"]["ref"].value;
		var n_tests = document.forms["myForm_search"]["n_tests"].value;
		var n_country=document.forms["myForm_search"]["n_country"].value;


		var country_value=new Array();
		var country_selected=new Array();
		var k=0;
		for(var j=0;j < n_country; j++){
			//j.toString();
			//y = "country"+j;

			country_value[j]=document.getElementById("country"+j).checked;
			if(country_value[j]==true)
			{
				country_selected[k]=document.forms["myForm_search"]["country"+j].value;
				k++;
			}
			/*
			else if (country_value[j]==false)
			{
				country_selected[j]="";

			}
			*/

		//country_value[j]=document.forms["myForm_search"][y].value;
		}
		//document.getElementById("trial").innerHTML=country_value[0];


		//var frm=document.getElementById("frm");
		//var checks=new Array();
		//var inps=frm.getElementByTagName("input");
		//var n_inps=inps.length;

		//for(var i=0;i<n_inps;i++)
		//{
			//if(inps[i].type=="checkbox" && inps[i].checked==true)
			//{
			//	checks.push(inps[i].value);
			//}
		//}



		//var checkboxes=document.forms["myForm_search"]["country_check"].value;
		//var checkboxes=document.getElementByName("country_check");
		//var checkboxesChecked=[];
		//for(var i=0;i<checkboxes.length;i++)
		/*{
			if(checkboxes[i].checked)
			{
				checkboxesChecked.push(checkboxes[i]);
			}
		}
		*/

		//document.getElementById("trial").innerHTML=country_value[0];

		var tests_value=new Array();
		for(i=0;i<n_tests;i++){
			y= "tests"+i;
			tests_value[i]=document.forms["myForm_search"][y].value;
		}

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
		else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = "";
				$('#txtHint').append(xmlhttp.responseText).accordion('destroy').accordion();
           }
        };

		tests = JSON.stringify(tests_value);
		country=JSON.stringify(country_selected);
        xmlhttp.open("GET","getdb.php?bname="+bname+"&morph_char="+morph_char+"&molecular_seq="+molecular_seq+"&app="+app+"&ref="+ref+"&tests_value="+tests+"&n_tests="+n_tests+"&country="+country+"&n_country="+k,true);
		xmlhttp.send();
    };
	function add_entry(){
		var email = document.forms["myForm_add"]["email"].value;
		var bname = document.forms["myForm_add"]["bname"].value;
		var country = document.forms["myForm_add"]["country"].value;
		var morph_char = document.forms["myForm_add"]["morph_char"].value;
		var molecular_seq = document.forms["myForm_add"]["molecular_seq"].value;
		var app= document.forms["myForm_add"]["app"].value;
		var ref = document.forms["myForm_add"]["ref"].value;
		var culture_media = document.forms["myForm_add"]["culture_media"].value;
		var bacteria_type = document.forms["myForm_add"]["bacteria_type"].value;
		var n_tests = document.forms["myForm_add"]["n_tests"].value;

		var tests_value=new Array();
		var i=0;
		for(i=0;i<n_tests;i++){
			var y= "tests"+i;
			tests_value[i]=document.forms["myForm_add"][y].value;
		}

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
		else{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = this.response;
			}
		};

		tests = JSON.stringify(tests_value);
        xmlhttp.open("GET","add_form.php?bname="+bname+"&morph_char="+morph_char+"&molecular_seq="+molecular_seq+"&email="+email+"&app="+app+"&ref="+ref+"&tests_value="+tests+"&n_tests="+n_tests+"&country="+country+"&culture_media="+culture_media+"&bacteria_type="+bacteria_type,true);
		xmlhttp.send();
    } ;
</script>

</body>
</html>
