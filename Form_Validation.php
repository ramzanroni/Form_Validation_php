<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<style type="text/css">
		.error{ color: #FF0000; }
	</style>
</head>
<body>
	<?php
		$nameErr= $emailErr= $genderErr = $websiteErr="";
		$name =$email= $gender= $comment=$website="";

		if ($_SERVER["REQUEST_METHOD"]== "POST")
		{
			if (empty($_POST["name"])) {
				$nameErr="Name is required";
			}
			else
			{
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
     {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
			
		

		if (empty($_POST["email"])) {
			$emailErr="Email is required";
		}
		else
		{
			$email=test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr="Email is required";
			}
		}
		if (empty($_POST["website"])) {
			$website="";
		}
		else
		{
			$website= test_input($_POST["website"]);
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
				$websiteErr="Invalid URL";
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
	function test_input($data)
	{
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}

	?>

	<h2>Form Validation Example</h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name" value="<?php echo $name; ?>">
		<span class="error">*<?php echo $nameErr; ?></span><br>
		Email:<input type="text" name="email" value="<?php echo $email; ?>">
		<span class="error">* <?php echo $emailErr ?></span><br>
		Website: <input type="text" name="website" value="<?php echo $website; ?>">
		<span class="error"><?php echo $websiteErr;?></span><br>
		Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br>
		Gender:
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female")  {
			echo "checked";
		}?>value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") {
			echo "checked";
		}?> value="male">Male
		<span class="error"> *<?php echo $genderErr?></span><br>
		<input type="submit" name="submit" value="Submit">

	</form>

	<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo "You are".'&nbsp;'.$gender;
?>
</body>
</html>