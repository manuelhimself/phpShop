<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/U1Card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <!--Cards-->
    <div id="cardsContainer" class="container">
        <div class="row justify-content-center">
            <?php
            include "dbCredentials.php";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT id, name, price, description FROM product";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col mb-4">
                <div class="card h-100 shadow" style=" background-color: #222222;">
                    <div class="inner">
                        <img class="card-img-top" src="img/<?php $row["id"] ?>.jpg" alt="3DFX Voodoo 2 12MB">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php $row["name"] ?></h5>
                        <p class="card-text"><?php $row["description"] ?></p>
                        <p class="card-text font-weight-bold">Price: $ <?php $row["price"] ?></p>
                        <div class="card-footer">
                            <a href="product.php?id=<?php $row["id"] ?>" class="btn" style="background-color:#880101; color: white;">Go to product</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        }} else {
                            echo "0 results";
                        }
            $conn->close();
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>