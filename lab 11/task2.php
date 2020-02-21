<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employeeTable = "CREATE TABLE IF NOT EXISTS employee(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ename VARCHAR(30) NOT NULL,
  dept VARCHAR(30) NOT NULL
  )";

if ($conn->query($employeeTable) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$loadDataQuery = "LOAD DATA INFILE 'data.txt' INTO TABLE employee";

if ($conn->query($loadDataQuery) === TRUE) {
  echo "Data Loaded successfully";
} else {
  echo "Error loading data " . $conn->error;
}



?>