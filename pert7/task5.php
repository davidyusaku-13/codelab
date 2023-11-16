<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <div class="w3-container">
    <p><strong>Monthly Report 2023</strong></p>
    <input class="w3-input w3-border w3-padding" style="width: 25%;" type="text" placeholder="Search for Merk" id="myInput" onkeyup="myFunction()">
    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-margin-top" id="myTable" style="width: 25%;">
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

  <script>
    function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>

</body>

</html>