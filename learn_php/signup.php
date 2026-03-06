<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="teachbg">

<div class="form-box">

<h2>Create Account</h2>

<form action="process_signup.php" method="POST">

<label>Full Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm_password" required>

<br><br>

<button type="submit">Sign Up</button>

</form>

</div>

</body>
</html>