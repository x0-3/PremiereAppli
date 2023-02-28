<?php

session_start(); // start a session

require("db-functions.php");


//si il ya des action dans l'url
if(isset($_GET['action'])){

    // switch entre differente action posible
    switch($_GET['action']){
        case "ajouter":

            // FIXME:
            $id = $_GET['id'];
            findAll();

            $product = [
                "name" => $name,
                "price" => $price,
                "qtt" => $qtt,
                "total" => $price*$qtt
            ];

            // display the data stored in the array
            foreach($products as $product){
                ?>
                <br>
                <a href="product.php?id=<?=$product['id']?>" class="h3 m-2"><?php echo $product['name']; ?></a>
                <p class="m-2 text-muted"><?php echo mb_strimwidth($product['description'], 0, 50 , '...'); ?></p>
                <p class="fw-bold m-2"><?php echo $product['price']; ?> €</p>
                <a href="traitement.php?action=ajouter&id=<?=$product['id']?>" type="button" class="btn btn-dark m-2">Ajouter au panier</a>
                
                <br>
            
                <?php
            }

            $_SESSION['products'][] = $product;


            // see if the POST request existe
            // it is also used to limit the access of traitement.php

            // if(isset($_POST['submit'])){

            //     // filter the value that is received
            //     // counter the risk for errors or hacks 

            //     $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //     $descr = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //     $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            //     $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

            //     // see if the filters works
            //     // those variables are supposed to hold the values that was submited or erased in the form 
            //     if($name && $price && $descr && $qtt){
            //         // store the data in session by adding it in an array
            //         $product = [
            //             "name" => $name,
            //             "price" => $price,
            //             "description" => $descr,
            //             "qtt" => $qtt,
            //             "total" => $price*$qtt
            //         ];
                // insertProduct($name,$descr,$price);
                // header("Location:product.php");
            //     }

            // }
        
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
            // if I have the keyword 'id in the url and taht I have the product id then retrieve the quantity that is present in the id with a $_GET
            if(isset($_GET['id']) &&($_SESSION['products'][$_GET['id']])){
               $_SESSION['products'][$_GET['id']]['qtt']++;// increament the quantity that is in the id
               header("Location:index.php");// redirect user to this URL
                die();
            }
        break;

        // decrease quantity
        case"enleverProduit":
            if(isset($_GET['id']) && ($_SESSION['products'][$_GET['id']])){
                // in order to get the quantity you need to write the path that allows to get to it 
                $_SESSION['products'][$_GET['id']]['qtt']--;// retrieve the quantity that is in the id with a $_GET and decreament it
                header("Location:index.php");// redirect user to this URL

                // if quantity = 0 then delete the product
                if($_SESSION['products'][$_GET['id']]['qtt'] == 0){
                    unset ($_SESSION['products'][$_GET['id']]);
                    header("Location:index.php");// redirect user to this URL
                }
                die();
            }
        break;
    }
}

// redirect user to this URL
header("Location:index.php");