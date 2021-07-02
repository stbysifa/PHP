<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link href="css/Style.css" rel="stylesheet">
	<!-- <?php
		include 'headerAdmin.php';
	?> -->
	<ul>
		<li><a href="addStudents.php">Add students</a></li>
		<li><a href="addTeachers.php">Add teachers</a></li>
		<li><a href="veiwFeedbacks.php">View feedbacks</a></li>
		<li><a href="seeFeedbacks.php">View feedbacks</a></li>
		<li style="float: right;" class="logout"><a href="Logout.php" onclick='alert("You will be logged out !");'>Logout</a></li>
	</ul>
</head>
<body>
	<form method="post">
		<br><br>
		<input type="text" name="name" list="n">
		<input type="submit" name="submit">
	</form>
</body>
</html>
<datalist id="n">
<?php
	$f=fopen("Faculty.csv", "r");
	while($r=fgetcsv($f,",")){

		?>
		<option><?php echo $r[1]?></option>
		<?php

	}
?>
</datalist>
	<?php
	if(isset($_POST["submit"]))
	{
		
		$f1=fopen("Faculty.csv", "r");
		while($r1=fgetcsv($f1,",")){
			if($r1[1]==$_POST["name"]){
				echo "Welcome ".$r1[1]."<br>";
				echo $r1[0]." ".$r1[2]." ".$r1[3]."<br>";

			}
		}
	}
?>


