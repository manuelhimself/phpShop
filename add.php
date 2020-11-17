<?php
include "dbCredentials.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_REQUEST["name"];
$price = $_REQUEST["price"];
$description = $_REQUEST["description"];

$sql = "INSERT INTO product (name, price, description) VALUES ($name, $price, $description);";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
    }
} else {
    echo "0 results";
}


$conn->close();

