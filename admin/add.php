<?php
include "../dbCredentials.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (name, price) 
        VALUES ('$_REQUEST[name]','$_REQUEST[price]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/*$sql="SELECT AUTO_INCREMENT
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'shop'
AND   TABLE_NAME   = 'product';";*/



mysqli_close($conn);

header("Location: http://shop.me");
exit;
?>