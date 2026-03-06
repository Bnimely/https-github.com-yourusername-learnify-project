<!DOCTYPE html>
<html>
<head>
<title>Teach With Us</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="teachbg">

<div class="form-box">

<h2>Teach With Us</h2>

<form action="process.php" method="POST" enctype="multipart/form-data">

<label>Full Name:</label>
<input type="text" name="name" required>

<label>Email:</label>
<input type="email" name="email" required>

<label>Teaching Experience:</label>
<input type="text" name="experience">

<label>Qualifications:</label>
<input type="text" name="qualification">

<label>Subject To Teach:</label>
<input type="text" name="subject">

<fieldset>
<legend>Preferred Teaching Mode</legend>

<input type="radio" name="mode" value="Online"> Online
<br>
<input type="radio" name="mode" value="In-Person"> In-Person

</fieldset>

<label>Introduce Yourself</label>
<textarea name="intro"></textarea>

<label>Brief Description of yourself</label>
<textarea name="description"></textarea>

<label>Upload CV</label>
<input type="file" name="file">

<br><br>

<button type="submit">Submit</button>

</form>

</div>

</body>
</html>