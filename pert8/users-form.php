<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <div class="w3-container">
    <p><strong><a href="./users-lists.php">Users Lists</a> / Users Form Edit</strong></p>
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
        echo "<form action='users-form-update.php' method='GET'>";
        echo "<div class='w3-card w3-margin-top' style='width:25%;'>";
        echo "<img style='width:100%;' src='https://www.w3schools.com/w3css/" . $row["avatar"] . "' alt=''>";
        echo "<div class='w3-container'>";
        echo "<strong><p>UserID</p></strong>";
        echo "<input type='text' class='w3-input' name='userid' value='" . $row["userid"] . "'>";
        echo "<strong><p>Passcode</p></strong>";
        echo "<input type='password' class='w3-input' name='passcode' value='" . $row["passcode"] . "'>";
        echo "<strong><p>Avatar</p></strong>";
        echo "<input type='text' class='w3-input' name='avatar' value='" . $row["avatar"] . "'>";
        echo "<input type='hidden' name='olduserid' value='" . $row["userid"] . "'>";
        echo "<p>
                <button class='w3-button w3-section w3-teal w3-ripple' type='submit'> Insert </button>
                <button class='w3-button w3-section w3-red w3-ripple' type='reset'> Cancel </button>
              </p>";
        echo "</div></div></form>";
      }
    }


    mysqli_close($conn);
    ?>
  </div>

</body>

</html>