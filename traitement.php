<?php
session_start(); // start a session

//si il ya des action dans l'url
if(isset($_GET['action'])){

    // switch entre differente action posible
    switch($_GET['action']){
        case "ajouter":
            // see if the POST request existe
            // it is also used to limit the access of traitement.php
            if(isset($_POST['submit'])){

                // filter the value that is received
                // counter the risk for errors or hacks 
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

                // see if the filters works
                // those variables are supposed to hold the values that was submited or erased in the form 
                if($name && $price && $qtt){

                    // store the data in session by adding it in an array
                    $product = [
                        "name" => $name,
                        "price" => $price,
                        "qtt" => $qtt,
                        "total" => $price*$qtt
                    ];

                    // save this product that has been created in session
                    $_SESSION['products'][] = $product;
                }
            }
            break;

        // delete all the products in the table 
        case"viderPanier":
            unset($_SESSION["products"]);
            header("Location:index.php");
            die();// stop reading the script native function
        break;
        
        // delete one product from the table
        case"supprimerProduit":
            // if I have the keyword 'id' in the URL and that I have the product that has this id in my table
            if(isset($_GET['id']) && isset($_SESSION['products'][$_GET['id']])){
                // $produit = $_SESSION['products'][$_GET['id']];
                unset($_SESSION['products'][$_GET['id']]);
                header("Location:index.php");
                die();// stop reading the script native function
            }
        break;

        // increase quantity
        case"augmenterProduit":
            if(isset($_GET['id']) &&($_SESSION['product'][$_GET['id']])){
                $_GET['qtt']++;
            }

        break;

        // baiser la quantite (si 0 alors supprimer le product)
    }
}

// redirect user to this URL
header("Location:index.php");