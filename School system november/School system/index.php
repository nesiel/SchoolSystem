<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="hello.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="nesiel">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="nesiel@gmail.com">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
