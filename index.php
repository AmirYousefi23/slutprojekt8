<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_info3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `personlig information` (`Namn`, `Saldo`, `Bankonto`, `Nummer`) VALUES ('Amir', '901', '99', '100')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>