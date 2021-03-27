<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<style type="text/css">
		.error{ color: #FF0000; }
	</style>
</head>
<body>
	<div class="container">
		<h2 class="p-3 bg-primary text-center">
			Form Validation Using PHP
		</h2>
		<form method="post">
			<div class="form-group">
				<label>Name</label>
				<span class="error">*</span>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<span class="error">*</span>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Website</label>
				<input type="text" name="website" class="form-control">
			</div>
			<div class="form-group">
				<label>Gender</label><br>
				<input type="radio" name="gender"   value="female">  Female
				<input type="radio" name="gender"   value="male">  Male
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>