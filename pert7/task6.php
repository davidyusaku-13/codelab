<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
  <div class="w3-container">
    <p><strong>Characters</strong></p>
    <?php
    $characters = array(
      array("Kaedehara Kazuha", "Boss of All Boss", "img_avatar1.png"),
      array("Neuvillette", "The Judge", "img_avatar2.png"),
      array("Xingqiu", "The Manager", "img_avatar3.png"),
      array("Kamisato Ayaka", "Secretary", "img_avatar4.png"),
      array("Kuki Shinobu", "Staff IT", "img_avatar5.png")
    );
    for ($x = 0; $x < count($characters); $x++) {
      echo "<div class='w3-card w3-margin-top' style='width: 25%;''>";
      echo "<img src='https://www.w3schools.com/w3css/" . $characters[$x][2] . "' width='100%' alt=''>";
      echo "<div class='w3-container'>";
      echo "<p><strong>" . $characters[$x][0] . "</strong></p>";
      echo "<p>" . $characters[$x][1] . "</p></div></div>";
    }
    ?>
  </div>
</body>

</html>