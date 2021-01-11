<?php
$servername = "labs.iam.cat";
$database = "a16pednieper_v2";
$username = "a16pednieper";
$password = "pedro";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>