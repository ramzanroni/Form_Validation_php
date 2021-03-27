<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<style type="text/css">
		.error{
			color: #FF0000;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="p-3 text-center bg-success">Get Input And show Output</h2>
	<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
			<label>Name</label>
			<input type="texr" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Website</label>
			<input type="text" name="website" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Comment</label>
			<textarea class="form-control" rows="3" name="comment"></textarea>
		</div>
		<div class="form-group">
			<label>Gender</label><br>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
		</div>
		
	</form>
</div>
	<?php
	$name=$email=$gender=$comment=$website="";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name= test_input($_POST["name"]);
		$email= test_input($_POST["email"]);
		$website= test_input($_POST["website"]);
		$comment=test_input($_POST["comment"]);
		$gender=test_input($_POST["gender"]);
	}
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	echo "<h2>Input Data form User</h2>";
	echo "<hr>";
	echo "User Name".$name."<br>";
	
	echo "Email: ".$email."<br>";
	echo "Website: ".$website."<br>";
	echo "Your Comment: ".$comment."<br>";
	echo "Your Gender: ".$gender."<br>";

	?>
</body>
</html>