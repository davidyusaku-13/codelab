<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
  <div class="w3-container w3-margin-top">
    <div class="w3-card" style="width: 50%;">
      <div class="w3-container">
        <h3>Login</h3>
        <p>Please, Register or Login to our site first !</p>
        <form class="w3-margin-bottom" action="./task8.php" method="POST">
          <label for="userid"><strong>User ID</strong></label>
          <input class="w3-input w3-border" type="text" name="userid" id="userid" placeholder="">
          <label for="passcode"><strong>Passcode</strong></label>
          <input class="w3-input w3-border" type="password" name="passcode" id="passcode">
          <p><input class="w3-button w3-green w3-ripple" name="submit" type="submit" value="Signin"></p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>