<?php
$lang = "en";
$languages = array(
    "en" => array("Products", "Add Products", "Price", "In stock", "Add to cart", "Shopping Cart", "Name", "Price in USD", "Description", "Image"),
    "cat" => array("Productes", "Afegeix Products", "Preu", "En estoc", "Afegeix al carretó", "Carretó", "Nom", "Preu en dòlrs americans", "Descripció", "Imatge")
);

function changeLang($newLang){
    $GLOBALS['lang'] = $newLang;
}
