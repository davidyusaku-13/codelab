<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
  <div class="w3-container w3-margin-top">
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <p><strong>Characters</strong></p>
    <table class="w3-table w3-bordered" style="width:auto;">
      <?php
      $characters = array("Kaedehara Kazuha", "Kuki Shinobu", "Neuvillette", "Kamisato Ayaka", "Keqing", "Barbara", "Xingqiu");
      echo "<tr><td>$characters[0]</td></tr>";
      echo "<tr><td>$characters[1]</td></tr>";
      echo "<tr><td>$characters[2]</td></tr>";
      echo "<tr><td>$characters[3]</td></tr>";
      echo "<tr><td>$characters[4]</td></tr>";
      echo "<tr><td>$characters[5]</td></tr>";
      echo "<tr><td>$characters[6]</td></tr>";
      ?>
    </table>
  </div>
</body>

</html>