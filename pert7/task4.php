<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
  <div class="w3-container">
    <p><strong>Monthly Report 2023</strong></p>
    <table class="w3-table w3-bordered w3-striped w3-hoverable" style="width: auto;">
      <tr>
        <th class="w3-blue">No.</th>
        <th class="w3-blue">Merk</th>
        <th class="w3-blue">In Stock</th>
        <th class="w3-blue">Sold</th>
      </tr>
      <?php
      $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
      );
      for ($x = 0; $x < count($cars); $x++) {
        echo "<tr><td>" . $x + 1 . "</td>";
        echo "<td>" . $cars[$x][0] . "</td><td>" . $cars[$x][1] . "</td><td>" . $cars[$x][2] . "</td></tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>