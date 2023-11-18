<!DOCTYPE html>
<html>
<title>User Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

  <header class="w3-container w3-teal">
    <h1>User Registration</h1>
  </header>

  <div class="w3-container w3-half w3-margin-top">

    <form class="w3-container w3-card-4" action="users-add.php" method="POST">

      <p><label>User ID</label>
        <input class="w3-input" type="text" style="width:90%" required name="userid">
      </p>

      <p><label>Passcode</label>
        <input class="w3-input" type="password" style="width:90%" required name="passcode">
      </p>

      <p><label>Retype Passcode</label>
        <input class="w3-input" type="password" style="width:90%" required name="repasscode">
      </p>

      <p><button class="w3-button w3-section w3-teal w3-ripple" type="submit"> Insert </button>
        <button class="w3-button w3-section w3-red w3-ripple" type="reset"> Cancel </button>
      </p>

    </form>

  </div>

</body>

</html>