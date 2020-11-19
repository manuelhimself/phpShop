<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop.me</title>
    <link rel="stylesheet" href="css/productStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-dark sticky-top">
        <!--Logo-->
        <a class="navbar-brand" href="index.php">
            <img id="logo" class="logo" src="img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--Links-->
                <li class="nav-item">
                    <a class="nav-link" href="http://administrador.shop.me">Add Products</a>
                </li>
            </ul>
            <a class="form-inline my-2 my-lg-0" href="cart.php">
                <img id="logoCart" class="logo" src="img/cart.png" alt="Cart Logo">
            </a>
        </div>

    </nav>

    <div class="item-container">
        <?php
        include "dbCredentials.php";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $id = $_GET['id'];
        $sql = "SELECT id, name, price, description FROM product WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
        <h1><?php echo $row["name"] ?></h1>
                <div class="container">
                    <div class="col-md-12">
                        <div class="product col-md-3 service-image-left">

                            <center>
                                <img id="item-display" src="img/<?php echo $row["id"] ?>.jpg" alt=""></img>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="product-desc"><?php echo $row["description"] ?></div>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                        <hr>
                        <div class="product-price">$ <?php echo $row["price"] ?></div>
                        <div class="product-stock">In Stock</div>
                        <hr>
                        <div class="btn-group cart">
                            <a href="cart.php?id=<?php echo $row["id"] ?>" class="btn" style="background-color:#880101; color: white;">Add to cart</a>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>