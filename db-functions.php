<?php

function connection()
{
    $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // précise le type d'erreur que PDO renverra en cas de requête invalide.
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, // PDO renverra les données sous forme de tableau associatif (FETCH_ASSOC)
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // force la prise en charge de l'UTF-8
    ];



    try {
        // On se connecte à MySQL
        $mysqlClient = new PDO('mysql:host=localhost;dbname=store;charset=utf8', 'root', '', $options);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    return $mysqlClient;
}

function findAll(){
    $db = connection(); //objet BDD 
    $sql = "select * from product"; // la requete SQL
    $request = $db->prepare($sql); // on indique quelle requete on va envoyer
    $request->execute(); // on envoie la resquete 

    // retourne un tableau contenant toutes les lignes de la base de donnée
    $products = $request->fetchAll(); // on stock le resultat dans un variable, on précise all s'il y a plusieurs résultats attendus

    foreach($products as $product){
        ?>
        <br>
        <a href="product.php?id=<?=$product['id']?>" class="h3 m-2"><?php echo $product['name']; ?></a>
        <p class="m-2 text-muted"><?php echo mb_strimwidth($product['description'], 0, 50 , '...'); ?></p>
        <p class="fw-bold m-2"><?php echo $product['price']; ?> €</p>
        <a href="#" class="m-2">Ajouter au panier</a>
        <br>
    
        <?php
    }
}


function  findOneById($id) {
    $db = connection();
    $sql = "select * from product where id = :id";
    $request = $db->prepare($sql);
    $request->execute(array(':id'=> $id));

    // récupère la ligne suivante de la base de donnée
    $product = $request->fetch();

    ?>
    <br>
    <a href="index.php" class="m-2">Retour</a>
    <p class="h3 m-2"><?php echo $product['name']; ?></p>
    <p class="m-2 text-muted"><?php echo $product['description']; ?></p>
    <p class="fw-bold m-2"><?php echo $product['price']; ?> €</p>
    <a href="#" class="m-2">Ajouter au panier</a>
    <br>

    <?php


}
