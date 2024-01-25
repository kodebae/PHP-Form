<?php
//Parameters connecting to a database
$dbHost = "localhost";
//default username of XAMPP
$dbUser = "root";
// default password is currently set to null
$dbPass = "";
// the name of my database
$dbName = "phpformdata";

// database connection: "i" supports more features than the "mysql" without it
$dbConnect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);



if (!$dbConnect) {
    die("504: failed to connect to the database.");
}
