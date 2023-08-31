<?php
if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // Validate and sanitize input
    if (empty($username) || empty($pwd)) {
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    // Hash the password
    $hashedPwd = hash("sha256", $pwd);

    // Use prepared statements
    if (loginUser($conn, $username, $hashedPwd)) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

} else {
    header("Location: ../login.php");
    exit();
}
?>
