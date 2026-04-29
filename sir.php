<?php
require("connection.php");

if (!$connection) {
    die("DB not connected");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $phone = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $reason = $_POST["reason"];
    $date = $_POST["date"];

    $sql = "INSERT INTO dental_clinic 
    (`Full Name`, `Phone Number`, `Email`, `Address`, `Date of Birth`, `Gender`, `Reason for Visit`, `Appointment Date`) 
    VALUES 
    ('$fullname', '$phone', '$email', '$address', '$dob', '$gender', '$reason', '$date')";

    if (mysqli_query($connection, $sql)) {

        header("Location: home.html");
        exit();

    } else {
        echo "SQL Error: " . mysqli_error($connection);
    }
}
?>