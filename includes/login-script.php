<?php 
if (isset($_POST["submit"])) {
    require 'database.php'

    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $confirmPass = $_POST ['confirmPassword'];
    $email = $_POST ['email'];

} else {
    header("Location: ../index.php?error=accessdenied");
    exit();
}
?>

// fetching form data and saving in variables