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
        <div class="mb-3 mt-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Put your Name here ..." name="name">
        </div>
        <div class="mb-3">
          <label for="studyProgram" class="form-label">Study Program</label>
          <input type="text" class="form-control" id="studyProgram" placeholder="Put your Study Program here ..." name="studyProgram">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the ID from the form
        $name = $_POST['name'];
        $studyProgram = $_POST['studyProgram'];
        // Display the ID
        echo "hello, " . $name . ", You are from " . $studyProgram;
      }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>