<?php

$servername = "localhost";
$username = "root";
$password = "";
//$database = 'mydatabase';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE mydatabase";
if (mysqli_query($conn, $sql)) {
  // echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

//And finally we close the connection to the MySQL server
