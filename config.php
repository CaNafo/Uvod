<?php error_reporting(0); ?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename="uvod";
// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);

    header('Content-Type: text/html; charset=utf-8'); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    session_start(); 
?>