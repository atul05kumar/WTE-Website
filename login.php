<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infogear";
$actualuser = "";
$actualpass = "";
$name = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "	SELECT * FROM login where username = '$username' and password = '$password'";
	$result = $conn->query($query);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
		   $actualuser = $row["username"];
		   $actualpass = $row["password"];
		   $name = $row['name'];
		}
		if($actualuser == $username && $actualpass == $password) {
			$_SESSION['username'] = $name;
			header('Location:home.php');
		}
	} else {
		header("Location:signin.html");
	}
} else {
	header("Location:signin.html");
}
?>