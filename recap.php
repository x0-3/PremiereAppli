<?php

//* we do a session_start because we will need to go 
// thru the array
session_start();// start session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
</head>
<body>

    <?php
    // if there is no products in the session than write
    if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
        echo "<p>Aucun produit en session</p>";
    }else{
        /*****************PAGE 13**************/ 
    }
    ?> 

</body>
</html>