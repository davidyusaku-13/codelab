<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codelab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-3">
    <div class="row">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="my-3">
          <label for="name" class="form-label"><strong>Name</strong></label>
          <input type="text" class="form-control" id="name" placeholder="Put your Name here ..." name="name">
        </div>
        <div class="my-3">
          <label class="form-label"><strong>Food & Beverages</strong></label>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="fnb1" name="fnb1" value="50000">
            <label class="form-check-label" for="fnb1">Pizza @50k</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="fnb2" name="fnb2" value="40000">
            <label class="form-check-label" for="fnb2">Burger @40k</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="fnb3" name="fnb3" value="20000">
            <label class="form-check-label" for="fnb3">Potato Chips @20k</label>
          </div>
        </div>
        <div class="my-3">
          <label class="form-label"><strong>Payment Type</strong></label>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="cash" name="optradio" value="cash">
            <label class="form-check-label" for="cash">Cash</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="debitCard" name="optradio" value="debit">
            <label class="form-check-label" for="debitCard">Debit Card</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the VALUE from the form based on NAME
        $name = (isset($_POST['name'])) ? $_POST['name'] : "";
        $fnb1 = (isset($_POST['fnb1'])) ? $_POST['fnb1'] : 0;
        $fnb2 = (isset($_POST['fnb2'])) ? $_POST['fnb2'] : 0;
        $fnb3 = (isset($_POST['fnb3'])) ? $_POST['fnb3'] : 0;
        $payment = $_POST['optradio'];
        $totalOrder = $fnb1 + $fnb2 + $fnb3;

        // Display the ID
        echo "hello, " . $name . ", Your Total Order Rp. " . $totalOrder . ",- (" . $payment . ")";
      }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>