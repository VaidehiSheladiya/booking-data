<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Sheladiya";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$age = $_POST['age'];
$ticket_type = $_POST['ticket_type'];


$price = 0;

if ($ticket_type == 'regular') {
    if ($age < 18) {
        $price = 10;
    } else if ($age >= 18 && $age <= 70) {
        $price = 28;
    } else {
        $price = 45;
    }
} else if ($ticket_type == 'vip') {
    if ($age < 18) {
        $price = 33;
    } else if ($age >= 18 && $age <= 80) {
        $price = 75;
    } else {
        $price = 48;
    }
}

$sql = "INSERT INTO tickets (name, age, ticket_type, price) VALUES ('$name', '$age', '$ticket_type', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successful! Price: $" . $price;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
