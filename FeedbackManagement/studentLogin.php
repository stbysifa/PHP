<html>
<head>
	<title>Student Login Page</title>
	 <link href="css/Style.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#F0FFF0;">
	<br><br><br><br><br><br>
		<div class="container" id="1">
	 		<h2>Student Login</h2>
			  <form action="ratingStud.php" method="post">
			    <div class="form-group">
			      <label for="RollNo">Roll No:</label>
			      <input type="text" class="form-control" id="RollNo" placeholder="Roll N0" name="RollNo" required>
			    </div>
			    <div class="form-group">
			      <label for="Class">Class:</label>
			      <input type="text" class="form-control" id="Class" placeholder="Enter Class" name="Class" required>
			    </div>
			    <input type="submit" value="submit" class="btn btn-success"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			    <input type="reset" value="reset" class="btn btn-danger">
			    <br><br>
	 		 </form>
	</div>
</body>
</html>
