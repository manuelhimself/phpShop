<?php
$lang = "en";
$languages = array(
    "en" => array("Products", "Add Products", "Price", "In stock", "Add to cart", "Shopping Cart", "Name", "Price in USD", "Description", "Image"),
    "ca" => array("Productes", "Afegeix Productes", "Preu", "En estoc", "Afegeix al carretó", "Carretó", "Nom", "Preu en dòlrs americans", "Descripció", "Imatge")
);

if( $_GET["lang"]) {
    
    $lang = $_GET["lang"];
    header("Location: http://shop.me");
    exit();
    
 }
