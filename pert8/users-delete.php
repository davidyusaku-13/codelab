<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// get id from users-lists
if (isset($_GET["userid"])) {
  $userid = $_GET["userid"];
}

// sql to delete a record
$sql = "DELETE FROM users WHERE userid='$userid'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("Location: users-lists.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
