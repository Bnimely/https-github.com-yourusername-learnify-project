<?php

$name = $_POST['name'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$qualification = $_POST['qualification'];
$subject = $_POST['subject'];
$mode = $_POST['mode'];
$intro = $_POST['intro'];
$description = $_POST['description'];

echo "<h2>Teacher Application Submitted</h2>";

echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Experience: ".$experience."<br>";
echo "Qualification: ".$qualification."<br>";
echo "Subject: ".$subject."<br>";
echo "Mode: ".$mode."<br>";
echo "Introduction: ".$intro."<br>";
echo "Description: ".$description."<br>";

?>