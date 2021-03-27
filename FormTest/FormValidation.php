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
	<?php
	$nameErr=$emailErr=$genderErr=$websiteErr="";
	$name=$email=$gender=$comment=$website="";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		if (empty($_POST["name"])) {
			$nameErr="Name is required";
		}
		else
		{
			$name= test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed";
				// echo '<script language="javascript">';
				// echo 'alert("Please Enter Valid Name.")';
				// echo '</script>';
				$name="";
			}
		}
		if (empty($_POST["email"])) {
			$emailErr="Email is required";
		}
		else
		{
			$email= test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $emailErr = "Invalid email format";
				// echo '<script language="javascript">';
				// echo 'alert("Please Enter Valid Email.")';
				// echo '</script>';
				 $email="";
			}
		}
		if (empty($_POST["website"])) {
			$website="";
		}
		else
		{
			$website= test_input($_POST["website"]);
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$websiteErr = "Invalid URL";
				// echo '<script language="javascript">';
				// echo 'alert("Please Enter Valid WebSite.")';
				// echo '</script>';
				$website="";
			}
		}
		if (empty($_POST["comment"])) {
			$comment="";
		}
		else
		{
			$comment=test_input($_POST["comment"]);
		}
		if (empty($_POST["gender"])) {
			$genderErr="Gender is required";
		}
		else
		{
			$gender=test_input($_POST["gender"]);
		}
		
		
	}
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	?>
	<div class="container">
		<h2 class="p-3 text-center bg-success">Get Input And show Output</h2>
		<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group">
				<label>Name</label>
				<span class="error">*<?php echo $nameErr ; ?></span>
				<input type="texr" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<span class="error">*<?php echo $emailErr ; ?></span>
				<input type="text" name="email" class="form-control" >
			</div>
			<div class="form-group">
				<label>Website</label>
				<span class="error"><?php echo $websiteErr ; ?></span>
				<input type="text" name="website" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" rows="3" name="comment"></textarea>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<span class="error">*<?php echo $genderErr ; ?></span><br>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
			</div>

		</form>
	</div>
	
	<?php
	echo "<h2>Input Data form User</h2>";
	echo "<hr>";
	echo "User Name: ".$name."<br>";
	
	echo "Email: ".$email."<br>";
	echo "Website: ".$website."<br>";
	echo "Your Comment: ".$comment."<br>";
	echo "Your Gender: ".$gender."<br>";

	?>
</body>
</html>