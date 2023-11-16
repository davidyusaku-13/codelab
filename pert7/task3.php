<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
  <div class="w3-container">
    <p><strong>Characters</strong></p>
    <table class="w3-table w3-bordered w3-striped w3-hoverable" style="width: auto;">
      <tr>
        <th class="w3-blue">No.</th>
        <th class="w3-blue">Name of Characters</th>
      </tr>
      <?php
      $characters = array("Kaedehara Kazuha", "Kuki Shinobu", "Neuvillette", "Kamisato Ayaka", "Keqing", "Barbara", "Xingqiu");
      for ($x = 0; $x < count($characters); $x++) {
        echo "<tr><td>" . $x + 1 . "</td>";
        echo "<td>$characters[$x]</td></tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>