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

$sql = "INSERT INTO product (name, price, description) VALUES ($name, $price, $description); SELECT LAST_INSERT_ID();";
$result = $conn->query($sql);
$id = $row["id"];
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
    }
} else {
    echo "0 results";
}


$conn->close();

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["$id"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_.$id"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_.$id"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["$id"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
