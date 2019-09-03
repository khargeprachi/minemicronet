<html>
<head>
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
  padding: 10px;
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
		//echo "connected";
	}

	if(!mysqli_select_db($con,'id5287457_mbd'))
	{
		echo 'database not connected';
	}
?>
  <?php
  	$sql2='Select name from test_name';
  	$run_query2=mysqli_query($con,$sql2);
  	$j=0;
  	while($row2=mysqli_fetch_row($run_query2))
  	{
  		$arr[$j]=$row2[0];
  		$j++;
  	}
  ?>

  <!--Navbar with tabs-->
    <div  class="navbar" style="position: fixed;top: 0; z-index:1; width: 100%; padding:10px; ">
      <a href="aboutus.html" style="float:right;">ABOUT US</a>
      <a href="sendmsg.php" style="float:right;">SEND MESSAGE TO ADMIN</a>
      <a href="database.php" style="float:right;">GO TO DATABASE</a>
      <a href="index.php" style="float:right;">INTRODUCTION</a>
      <a href="#myModal1" id="myBtn1" style="float:right;">ADD ENTRY</a>
      <div id="myModal1" class="modal" >

      <!-- Modal content -->
      <div class="modal-content" style="background-color:#ccc; height:180%;">
      <button class="close">X</button>
      <h3 style="width=100%; text-align:center;">ADD ENTRY</h3><br><br><br>
      <div id="testing"> </div>

        <form name="myForm_add">
        Email Id: <br>
      <input type="text" style="width:100%;height:30px;" name="email"></input><br>

      <div>
      <br>
      <!--<form name="myForm_search" style="font-size:20px; ">-->
        Enter Bacteria Name: <br>
      <input type="text" style="width:100%;height:30px;" name="bname" ></input><br>

        Enter Morphological Characteristics: <br>
      <input type="text"  style="width:100%;height:30px;" name="morph_char"></input><br>

        Enter Molecular Sequence: <br>
      <input type="text" style="width:100%;height:30px;" name="molecular_seq"></input><br>

        Enter Culture Media: <br>
      <input type="text" style="width:100%;height:30px;" name="culture_media"></input><br>

        Enter Bacteria Type: <br>
      <input type="text" style="width:100%;height:30px;" name="bacteria_type"></input><br>

        Enter Applications: <br>
      <input type="text" style="width:100%;height:30px;" name="app"></input><br>

        Enter Author/Journal Name: <br>
      <input type="text" style="width:100%;height:30px;" name="ref"></input>

        Enter Country of Origin: <br>
      <input type="text" style="width:100%;height:30px;" name="country"></input>

      </div>

      <br>


      <div class="row" style="font-size: 15px; " >
      <?php
      $m=0;
      for($j=0;$j<6;$j++)
      {
        echo '<div class="column" style="height:500px;">';
            for($i=0;$i<5;$i++)
        {
          if($m<26)
          {
            echo ''.$arr[$m].'<br>';
            echo '<br><select name="tests'.$m.'" style="width:80%;" >
              <option value="">Unknown</option>
              <option value="1">+</option>
              <option value="-1">-</option>
              </select><br><br>';
            $m++;
          }
        }
            echo '</div>';
      }
      echo '<input type="hidden" name="n_tests" value='.$m.'>';
        echo '</div>';
        ?>
      <div><button type="button"  style="width:100px; height:50px; padding:10px; margin:auto; display:block; " onclick="add_entry()" > Submit</button></div>

      </div>

        </form>

      </div>

<fig><img src='logo.png' alt="logo" style="float:left; width:150px; height:55px;"> </fig>

    <div  style="z-index:1; border:solid #333; background-color: #333; font-family:rockwell; font-size:30px;  color:white; text-align:center;float:left;padding-left:50px;">MineMICRONET</div>

    </div>
<!--Navbar with tabs ends-->








<div  style=" padding:80px 50px 50px 50px;" >
  <div  style="background-color:GREY; padding:10px; border: 1px solid black; font-weight:bold;">SEARCH BY GENERAL DETAILS</div>
	<div><br>
	<form name="myForm_search"  style="font-size:20px; " id="frm">
		Enter Bacteria Name: <br>
		<input type="text" style="width:100%;height:30px;" name="bname" ></input><br>

		Enter Morphological Characteristics: <br>
		<input type="text"  style="width:100%;height:30px;" name="morph_char"></input><br>

		Enter Molecular Sequence: <br>
		<input type="text" style="width:100%;height:30px;" name="molecular_seq"></input><br>

		Enter Applications: <br>
		<input type="text" style="width:100%;height:30px;" name="app"></input><br>

		Enter Author/Journal Name: <br>
		<input type="text" style="width:100%;height:30px;" name="ref"></input>

	</div>
</div>

<ul style="padding:0px 90px 30px 55px; ">
	<li  >
		<div class="coll" style="background-color:GREY; width:100%; border: 1px solid black;font-weight:bold;">SEARCH BY BIOCHEMICAL TESTS</div>
		<div class="content">
			<div class="row" style=" background-color:transparent;">
			<?php
				$m=0;
				for($j=0;$j<6;$j++)
				{
					echo '<div class="column" style="height:400px; width:15.4%; padding-top: 20px; padding-left:20px;background-color:none;font-size:20px;">';
					for($i=0;$i<5;$i++)
					{
						if($m<26)
						{
							echo $arr[$m];
							echo '<br><select name="tests'.$m.'" style="width:80%;" >
								<option value="">Unknown</option>
								<option value="1">+</option>
								<option value="-1">-</option>
								</select><br><br>';
							$m++;
						}
					}
					echo '</div>';
				}
				echo '<input type="hidden" name="n_tests" value='.$m.'>';
				echo '</div>';
			?>
		</div>
	</li>
	<li style="padding-top:20px;">
		<div class="coll" style="width:100%;background-color:GREY;  border: 1px solid black; z-index:-2; font-weight:bold;">SEARCH BY COUNTRY</div>
		<div class="content" style="padding-top:10px; z-index:-3;">
			<div class="row" style="width:100%; background-color:transparent;">
				<?php
					$sql3='Select distinct country from mbd where country is not null';
					$run_query2=mysqli_query($con,$sql3);
					$x=0;
					while($row2=mysqli_fetch_row($run_query2))
					{
						$country_names[$x]=$row2[0];
						$x++;
					}

					$y=intval($x/5);
					$y++;
					$n=0;
					for($j=0;$j<5;$j++)
					{
						echo '<div class="column" style="height:150px;  width:18.4%; padding-top: 20px; padding-left:20px;background-color:none;">';
						for($i=0;$i<$y;$i++)
						{
							if($n<$x)
							{
								echo '<label class="container" style="z-index:0;">'.$country_names[$n];
								echo '<input type="checkbox" style="z-index:0;" id="country'.$n.'" value="'.$country_names[$n].'"><span class="checkmark"></span></label>';
							$n++;
							}

						}
						echo '</div>';
					}
					echo '<input type="hidden" name="n_country" value="'.$x.'">';
					echo '</div>';
				?>
		</div>

    <div><button type="button" id="button"  style="width:100px; height:50px; padding:10px; margin:auto; display:block; " onclick="search()" > Submit</button></div>

  		</form>
    </li>
    </ul>

      <div id="txtHint" style="margin-bottom:10%; padding-top:100px;">  </div>

      <div style="background-color: #333; position:fixed; bottom:0; font-size:20px;font-family:rockwell; padding:10px; color:white; text-align:center; width:100%; " id ="footer" class="navbar" style="color:white; ">


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
      	// Get the modal
      	var modal1 = document.getElementById("myModal1");
      	// Get the button that opens the modal
      	var btn1 = document.getElementById("myBtn1");
      	// Get the <span> element that closes the modal
      	var span1 = document.getElementsByClassName("close")[0];
      	// When the user clicks on the button, open the modal

      	btn1.onclick = function() {
          modal1.style.display = "block";
      	}

      	// When the user clicks on <span> (x), close the modal
      	span1.onclick = function() {
      	modal1.style.display = "none";
      	}

      	// When the user clicks anywhere outside of the modal, close it
      	window.onclick = function(event) {
      		if (event.target == modal1) {
      			modal1.style.display = "none";
      		}
      	}
      </script>

<script>
      	function search()
      	{
          //var element = document.getElementById("txtHint");
          //element.scrollIntoView(true);
          $('html, body').animate({scrollTop: $("#txtHint").offset().top}, 2000);
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
</script>
<script>
function add_entry(){


    $('html, body').animate({scrollTop: $("#testing").offset().top}, 2000);
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
