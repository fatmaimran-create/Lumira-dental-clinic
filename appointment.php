<?php

require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $phone = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $reason = $_POST["reason"];
    $date = $_POST["date"];

    $sql = "INSERT INTO appointment
    (`Full Name`, `Phone Number`, `Email`, `Address`, `Date of Birth`, `Gender`, `Reason for Visit`, `Appointment Date`) 
    VALUES 
    ('$fullname', '$phone', '$email', '$address', '$dob', '$gender', '$reason', '$date')";

    if (mysqli_query($connection, $sql)) {
        echo "Appointment succesfully booked ";
        header("Location: Dental clinic.html");
        exit();

    } else {
        echo "SQL Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment - Lumira Dental Studio</title>
    <link rel="stylesheet" href="dental style.css">
</head>

<body>

<div class="topbar">
    <p>📞 +971 123 4567 | 📍 Sharjah, UAE</p>
</div>

<div class="form-section">

    <h1>🌸 Book Your Appointment</h1>
    <p class="form-subtext">Please enter your details below</p>

    <form class="dentalform" action="" method="POST">

        <label>Full Name</label>
    <input type="text" name="fullname" placeholder="e.g Fatma Imran" required>

    <label>Phone Number</label>
    <input type="text" name="number">

    <label>Email</label>
    <input type="email" name="email" placeholder="example@gmail.com">

    <label>Address</label>
    <input type="text" name="address">

    <label>Date of Birth</label>
    <input type="date" name="dob">

    <label>Gender</label>
    <select name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Prefer not to say</option>
    </select>

    <label>Reason for Visit</label>
    <select name="reason">
        <option>Health Treatment</option>
        <option>Cosmetic Treatment</option>
        <option>Consultation</option>
    </select>

    <label>Select Appointment Date</label>
    <input type="date" name="date">
    
        <input class="btn" type="submit" value="click me!">

    </form>

    <br>
    <a href="Dental clinic.html" class="back-btn">⬅ Back to Home</a>

</div>

</body>
</html>