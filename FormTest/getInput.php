<!DOCTYPE html>
<html>
<head>
	<title>Get form fild</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
	<!-- <?php
	//include 'welcome.php';
	?> -->
	<div class="container">
	<h2 class="p-3 bg-info">Get Data from input Field using php</h2>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			</div>
	</form>
	</div>
	<?php
	echo $_POST["name"]."<br>";
	echo $_POST["email"];
	?>
</body>
</html>