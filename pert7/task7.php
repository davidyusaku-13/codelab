<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>

  <div class="w3-container">
    <p><strong>Characters</strong></p>
    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-margin-top" style="width: 25%;">
      <tr>
        <th class="w3-blue">No.</th>
        <th class="w3-blue">Name of Characters</th>
        <th class="w3-blue">Actions</th>
      </tr>
      <?php
      $characters = array(
        array("Kaedehara Kazuha", "Boss of All Boss", "img_avatar1.png"),
        array("Neuvillette", "The Judge", "img_avatar2.png"),
        array("Xingqiu", "The Manager", "img_avatar3.png"),
        array("Kamisato Ayaka", "Secretary", "img_avatar4.png"),
        array("Kuki Shinobu", "Staff IT", "img_avatar5.png")
      );
      for ($x = 0; $x < count($characters); $x++) {
        echo "<tr><td>" . $x + 1 . "</td>";
        echo "<td>" . $characters[$x][0] . "</td>
        <td>
          <a style='text-decoration:none;' href='./task7details.php?id=" . $x . "'>
            <span class='material-symbols-outlined'>
                folder_shared
            </span>
          </a>
          <span class='material-symbols-outlined'>
            delete
          </span>
        </td>
        </tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>