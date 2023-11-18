<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_test";

$olduserid = $_GET["olduserid"];
$userid = $_GET["userid"];
$passcode = $_GET["passcode"];
$avatar = $_GET["avatar"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE users SET userid='$userid', passcode='$passcode', avatar='$avatar' WHERE userid='$olduserid'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
  header("Location: users-lists.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
