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
$sql = "INSERT INTO product (name, price, description) 
        VALUES ('$name', '$price', '$description')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>