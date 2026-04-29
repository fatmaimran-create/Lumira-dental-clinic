<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "dental_clinic";

// connect to database
$connection = mysqli_connect($server, $username, $password, $database);

// check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connection Successful";
}

?>