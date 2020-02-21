<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table

// prepare and bind
$stmt = $mysqli->prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param("i",$id);

// execute
$result = $stmt->execute();
		


//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

