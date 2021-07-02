<form method="post">

	<input type="text" name="fn">
	<input type="submit" name="submit">
</form>
<?php
		if(isset($_POST['submit'])){
			echo "<img src=Faculty/$_POST[fn].jpg>";

		}
	?>
