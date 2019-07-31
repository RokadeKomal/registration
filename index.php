<?php
	include('server.php');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>REGISTRATION FORM</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

			<form method="post" action="server.php">
				<div class="input">
					<label>Username</label>
					<input type="text" name="uname" placeholder="User Name">
				</div>
				<div class="input">
					<label>Email_Address</label>
					<input type="email" name="email" placeholder="email address">
				</div>
				<div class="input">
					<label>Password</label>
					<input type="password" name="pwd" placeholder="password">
				</div>
				<div class="input">
					<input type="submit" name="save" class="button" value="save">
				</div>
		</form>
	</body>
</html>
