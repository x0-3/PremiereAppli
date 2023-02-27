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

    $products = $request->fetchAll(); // on stock le resultat dans un variable, on précise all s'il y a plueisurs résultats attendus

    foreach($products as $product){
        ?>
        <br>
        <a href="product.php"><?php echo $product['name']; ?></a>
        <p><?php echo mb_strimwidth($product['description'], 0, 50 , '...'); ?></p>
        <p><?php echo $product['price']; ?> €</p>
        <a href="#">Ajouter au panier</a>
        <br>
    
        <?php
    }
}

function  findOneById($id) {
    $db = connection();

    $sql = "select * from product where id = :id";
    $request = $db->prepare($sql);
    $request->execute(array('id'=>$id));

    $products = $request->fetchAll();

    foreach($products as $product){
        ?>
        <br>
        <a href="index.php">Retour</a>
        <p><?php echo $product['name']; ?></p>
        <p><?php echo $product['description']; ?></p>
        <p><?php echo $product['price']; ?> €</p>
        <a href="#">Ajouter au panier</a>
        <br>
    
        <?php
    }

}
