<?php

session_start(); // start a session
include 'functions.php';
require("db-functions.php");


//si il ya des action dans l'url
if(isset($_GET['action'])){

    // switch entre differente action posible
    switch($_GET['action']){
        case "ajouter":

            if (isset ($_GET['id'])){
                $id = $_GET['id'];

                $id = filter_var($id, FILTER_VALIDATE_INT);

                $product=findOneById($id);

                $product = [
                    "name" => $product['name'],
                    "price" => $product['price'],
                ];

                // display the data stored in the array
                ?>
                <br>
                <a href="product.php?id=<?=$product['id']?>" class="h3 m-2"><?php echo $product['name']; ?></a>
                <p class="m-2 text-muted"><?php echo mb_strimwidth($product['description'], 0, 50 , '...'); ?></p>
                <p class="fw-bold m-2"><?php echo $product['price']; ?> €</p>
                <a href="traitement.php?action=ajouter&id=<?=$product['id']?>" type="button" class="btn btn-dark m-2">Ajouter au panier</a>
                <br>
                <?php  
                $_SESSION['products'][] = $product;
            }

            header("Location:index.php");
        
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
                productQtt();
               $_SESSION['products'][$_GET['id']]['qtt']++;// increament the quantity that is in the id
               header("Location:recap.php");// redirect user to this URL
                die();
            }
        break;


        // decrease quantity
        case"enleverProduit":
            if(isset($_GET['id']) && ($_SESSION['products'][$_GET['id']])){
                // in order to get the quantity you need to write the path that allows to get to it 
                productQtt();
                $_SESSION['products'][$_GET['id']]['qtt']--;// retrieve the quantity that is in the id with a $_GET and decreament it
                header("Location:recap.php");// redirect user to this URL

                // if quantity = 0 then delete the product
                if($_SESSION['products'][$_GET['id']]['qtt'] == 0){
                    unset ($_SESSION['products'][$_GET['id']]);
                    header("Location:recap.php");// redirect user to this URL
                }
                die();
            }
        break;


        // add data from the form to database 
        case"addproduct":
            
            if (isset ($_POST['submit'])){

                $name = $_POST['name'];
                $descr = $_POST['description'];
                $price = $_POST['price'];

                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $descr = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);


                // défintion faille XSS
                // Une faille XSS (Cross-Site Scripting) est une vulnérabilité de sécurité dans une application Web qui permet à un attaquant d'injecter et d'exécuter du code malveillant (généralement du code JavaScript)
                // les failles sont les recuperations de données sensibles tel que le numero de compte bancaire ou de mot de passe
                // valider et d'encoder correctement toutes les entrées utilisateur, notamment les formulaires de saisie, les champs de recherche et les URL

                // definition filter
                //  est une fonction qui permet de valider et/ou de filtrer des données d'entrée. Elle est souvent utilisée pour nettoyer et valider les données reçues d'un utilisateur, telles que les données de formulaire, les paramètres d'URL ou les données de session.
                // filter_list() Retourne une liste de tous les filtres supportés
                // filter_id() Retourne l’identifiant d’un filtre nommé
                // filter_input() Récupère une variable externe et la filtre
                // filter_var() Filtre une variable avec un filtre spécifique
                // filter_var_array() Récupère plusieurs variables et les filtre
                // filter_input_array() Récupère plusieurs variables externes et les filtre
                // filter_has_var() Vérifie si une variable d’un type spécifique existe

                // echapper une variable 
                // Pour échapper une variable SQL et éviter les attaques d'injection de SQL, il est recommandé d'utiliser des requêtes préparées avec des paramètres.
                // ex : :nom 
                // execute([$nom])


                $newId=insertProduct($name,$descr,$price); 
            }
            header("location:product.php?id=$newId");
            die();
        break;
    }
}


