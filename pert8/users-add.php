<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_test";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["userid"]) && isset($_POST["passcode"]) && isset($_POST["repasscode"])) {
    if ($_POST["userid"] != "" && $_POST["passcode"] != "" && $_POST["repasscode"] != "") {
        //insert data
        $userid = $_POST["userid"];
        $passcode = $_POST["passcode"];
        $sql = "INSERT INTO users (userid, passcode, avatar) VALUES ('$userid', '$passcode', 'img_avatar.png')";

        if (mysqli_query($conn, $sql)) {
?>
            <div class="w3-container">
                <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
                    <p>1 New record created successfully. <a href="register.php"><b>Back</b></a></p>
                </div>
            </div>

<?php
        }
    }
}
mysqli_close($conn);
?>