<?php
error_reporting(0);
echo <<<EOT
<html>
<head>
<title>Same Page php</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<div class="container">
<form action="$_SERVER[PHP_SELF]" method="POST">
<div class="form-group">
<label>User Name</label>
<input class="form-control" type="text" name="user">
</div>
<div class="form-group">
<label>Password</label>
<input class="form-control"type="password" name="pass">
</div>

<div class="form-group">
                <label>Select Your Country</label>
                <select class="form-control" name="country[]" multiple>
                    <option >None</option>
                    <option >Banglasesh</option>
                    <option >India</option>
                    <option >Afganisthan</option>
                    <option >Nepal</option>
                    <option >Vutan</option>
                    <option >Argentina</option>
                </select>
            </div>
            <div class="form-group">
                <label >Your message</label>
                <textarea class="form-control" name="mess" rows="3"></textarea>
            </div>
<div class="form-group">
                <input class="form-control btn btn-info" type="submit" name="submit" value="Submit">
            </div>
</form>
</div>
EOT;

if($_POST){
        print "<p>Welcome Mr. $_POST[user]</p><br>";
        print "<p>Your password is $_POST[pass]</p><br>";
        
        print "<P>Your message: <br> $_POST[mess]</p><br>";
        print "<p><b>You have the following books in collection: </b><br>";
        print "<ol>";
        foreach ($_POST[country] as $value) {
            print "<li> $value </li>";
        }
        print "</ol>";
}
echo "</body></html>";
?>
