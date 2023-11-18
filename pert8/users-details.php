<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <div class="w3-container">
    <p><strong><a href="./users-lists.php">Users Lists</a> / Users Details</strong></p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DB_test";

    $idparam = $_GET["userid"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE userid = '$idparam'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='w3-card w3-margin-top' style='width:25%;'>";
        echo "<img style='width:100%;' src='https://www.w3schools.com/w3css/" . $row["avatar"] . "' alt=''>";
        echo "<div class='w3-container'>";
        echo "<h4>" . $row["userid"] . "</h4>";
        echo "<p>" . $row["passcode"] . "</p></div></div>";
      }
    }


    mysqli_close($conn);
    ?>
  </div>

</body>

</html>