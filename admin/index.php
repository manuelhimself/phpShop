<?php 
    require_once "language.php";
?>
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
        <a class="navbar-brand" href="http://shop.me">
            <img id="logo" class="logo" src="../img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--Links-->
                <li class="nav-item">
                    <a class="nav-link" href="http://administrador.shop.me"><?php echo $languages[$lang][1] ?></a>
                </li>
            </ul>
            <a class="form-inline my-2 my-lg-0" href="cart.php">
                <img id="logoCart" class="logo" src="../img/cart.png" alt="Cart Logo">
            </a>
        </div>

    </nav>

    <h1><?php echo $languages[$lang][1] ?></h1>

    <form action="add.php" method="POST">
        <label><?php echo $languages[$lang][6] ?>:</label>
        <br>
        <input id="name" name="name" type="text">
        <br>
        <label><?php echo $languages[$lang][7] ?>:</label>
        <br>
        <input id="price" name="price" type="text">
        <br>
        <label><?php echo $languages[$lang][8] ?>:</label>
        <br>
        <textarea name="description" id="description" rows="10" cols="40"></textarea>
        <br>
        <label><?php echo $languages[$lang][9] ?>:</label>
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/x-png,image/gif,image/jpeg">
        <br>
        <br>
        <input type="submit" value="Add to database">
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>