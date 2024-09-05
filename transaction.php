<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blackhats";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$name = $_POST['name'];
$date = date("Y-m-d H:i:s");

// Insert user data into the "signup" table
$sql = "INSERT INTO trans (name, date) VALUES ('$name', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    header("Location: orderdone.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>