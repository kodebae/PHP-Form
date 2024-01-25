<?php

if (isset($_POST["submit"])) {
    require 'database.php';

    // fetching form data and saving in variables
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $confirmPass = $_POST ['confirmPassword'];
    $email = $_POST ['email'];
} 


 // TODO:
 // add security checks
// check to make sure user navigated to page the legit way and not by changing the URL
// added error handling and prepared statements to prevent SQL injection
// To be extra secure you would need to add an extra layer of protection with password hashing