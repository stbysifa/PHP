<?php
	$v=$_POST['Class'];

	$f=fopen("Faculty.csv", "r");
	while ($r=fgetcsv($f,",")) {
		if($v==$r[2]){
		echo $r[0]." ".$r[1]." ".$r[3]."<br>";

		}
	}
?>