<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (name, age, contact, gender, doctor, date, time) VALUES ('$name', '$age', '$contact', '$gender', '$doctor', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New appointment created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
