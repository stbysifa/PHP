<?php
		session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rating </title>
	<script type="text/javascript" src="css/task.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

	  <link rel="stylesheet" type="text/css" href="css/task.js">
	  <script>
			$(document).ready(function(){
			    $("#1").show();
			    $("#2").hide();

			 
			  $("#show").click(function(){
			   // $("#1").hide();
			    $("#2").show();
			  });
			});
		</script>
</head>
<body>
<form method="post">	<center><div id="1">
			<div class="container">  
				<?php

				if(isset($_POST['Class']))
				{
					$GLOBAL["v"]=$_POST['Class'];	
				}
				
				$_SESSION['cl']=$GLOBAL["v"];
				
				$GLOBAL["v"]=$_SESSION['cl'];
				$f=fopen("Faculty.csv","r");


				?>
				<select id="teachername">
					<?php
					while($r=fgetcsv($f,";")){

							if($_SESSION['cl']==$r[2]){ 

					echo "<option>$r[1]</option>";
							}
						}

					?>
				</select>
				</div><br>
			<button id="show" name="show">Select</button>
  			</div></form></center>
 <form method="post">
	<center><div class="container" id="2">
			  <h2></h2>          
			  <img src="Faculty/<?php 
			  			echo $_POST['show'];
			  ?>.png" class="img-rounded" alt="Cinque Terre" width="304" height="236">
			  <br><br>
			   <table class="table table-striped">
			  	<tr>
			  		<td>Subject Knowledge</td>
			  		<td><input type="range"  id="sk" name="sk">
            		<p>Value: <span id="sk1" ></span></p></td>
			  	</tr>
			  	<tr>
			  		<td>Teaching Style</td>
			  		 <td><input type="range" name="ts" id="ts" class="pointer" >
			            <p>Value: <span id="ts1"></span></p>
			            </td>
			  	</tr>
			  	<tr>
			  		<td>External Knowledge</td>
			  		<td><input type="range"name="ek" id="ek" class="pointer">
			            <p>Value: <span id="ek1"></span></p>
			            </td>
			  	</tr>
			  	<tr>
			  		<td>Confidence</td>
			  		 <td><input type="range" name="Confi" id="Confi" class="pointer">
			            <p>Value: <span id="Confi1"></span></p>
			            </td>
			  	</tr>
			  	<tr>
			  		<td>Understandable</td>
			  		 <td><input type="range" name="un" id="un" class="pointer">
			            <p>Value: <span id="un1"></span></p>
			            </td>
			  	</tr>
			  	<tr>
			  		<td>OverAll Rating</td>
			  		 <td><input type="range" name="oar" id="oar" class="pointer">
			            <p>Value: <span id="oar1"></span></p>
			            </td>
			  	</tr>
			  	<tr>
			  		<td><button type="button" class="btn btn-primary">Submit</button></td>
			  		<td><input type="reset" name="reset" class="btn btn-danger"></td>
			  	</tr>
			  </table>
			</div></center>
</form>

</body>
</html>
<script>

var slider1 = document.getElementById("sk");
var output1 = document.getElementById("sk1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
output1.innerHTML = this.value;
}
   
var slider2 = document.getElementById("ts");
var output2 = document.getElementById("ts1");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
var slider3 = document.getElementById("ek");
var output3 = document.getElementById("ek1");
output3.innerHTML = slider3.value;

  slider3.oninput = function() {
  output3.innerHTML = this.value;
}

var slider4 = document.getElementById("Confi");
var output4 = document.getElementById("Confi1");
output4.innerHTML = slider4.value;

  slider4.oninput = function(){
  output4.innerHTML = this.value;
}
var slider5 = document.getElementById("un");
var output5 = document.getElementById("un1");
output5.innerHTML = slider5.value;

  slider5.oninput = function(){
  output5.innerHTML = this.value;
}
var slider6 = document.getElementById("oar");
var output6 = document.getElementById("oar1");
output6.innerHTML = slider5.value;

  slider6.oninput = function(){
  output6.innerHTML = this.value;
}
</script>
