<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infogear";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$query = "INSERT INTO feedback(name, email, message) values ('$name', '$email', '$message')";
	if(isset($_SESSION['username'])) {
		$result = $conn->query($query);
		header("Location:aboutus.php");
	}
	else header("Location:aboutus.php");
} else {
	header("Location:aboutus.php");
}
?>
?>