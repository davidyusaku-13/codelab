<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<body>

  <div class="w3-container">
    <p><strong>Users Lists</strong></p>
    <table class="w3-table-all w3-hoverable" style="width:50%;">
      <tr class="w3-blue">
        <th>No.</th>
        <th>Avatar</th>
        <th>Userid</th>
        <th>Passcode</th>
        <th>Actions</th>
      </tr>
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

      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn, $sql);
      $c = 1;
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td style='vertical-align:middle;'>$c</td>";
          echo "<td style='width:20%;' style='vertical-align:middle;'><img style='width:70%;' class='w3-circle' src='https://www.w3schools.com/w3css/" . $row["avatar"] . "'></td>";
          echo "<td style='vertical-align:middle;'>" . $row["userid"] . "</td>";
          echo "<td style='vertical-align:middle;'>" . $row["passcode"] . "</td>";
          echo "<td style='vertical-align:middle;'>
                  <a href='users-details.php?userid=" . $row["userid"] . "'><i class='material-icons'>folder_shared</i></a>
                  <a href='users-delete.php?userid=" . $row["userid"] . "'><i class='material-icons'>delete</i></a>
                  <a href='users-form.php?userid=" . $row["userid"] . "'><i class='material-icons'>edit</i></a>
                </td>";
          echo "</tr>";
          $c++;
        }
      }

      mysqli_close($conn);
      ?>


    </table>
  </div>

</body>

</html>