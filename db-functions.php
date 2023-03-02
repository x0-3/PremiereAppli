<?php

function connection()
{
    $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // tells us the type of error in case of an invalide query
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, // PDO send the value in a associative array (FETCH_ASSOC)
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // forces UTF-8 support
    ];



    try {
        // connection to MySQL 
        $mysqlClient = new PDO('mysql:host=localhost;dbname=store;charset=utf8', 'root', '', $options);
    } catch (Exception $e) {
        // in case of an error, we show a message and stop the program
        die('Erreur : ' . $e->getMessage());
    }

    return $mysqlClient;
}

// shows all the products stored in the database
function findAll(){
    $db = connection(); //object DB 
    $sql = "select id,name,description,price from product"; // sql query
    $request = $db->query($sql); // we prepare the query that we want to send
    // we execute the query 

    //    query est utiliser pour preparer et executer des requette sans paramettre


    // retourne un tableau contenant toutes les lignes de la base de donnée
    $products = $request->fetchAll(); // the result is stored in a variable 
    
    return $products;
}

// shows only the product previously chosen by it's id 
function  findOneById($id) {
    $db = connection(); // connect to the database
    $sql = "select * from product where id = :id"; // query
    $request = $db->prepare($sql);
    $request->execute(array(':id'=> $id));
    // prepare et execute son utiliser si la requette doit etre executer plusieurs fois et si elle posséde des parametre


    // définition de l'injection SQL et définition d'une requete préparée

    // définition l'injection SQL
    // de méthodes d'exploitation de faille de sécurité d'une application interagissant avec une base de données

    // définition d'une requete préparée
    // elle est utilisée pour exécuter la même requête plusieurs fois, avec une grande efficacité et protège des injections SQL


    // récupère la ligne suivante de la base de donnée
    $product = $request->fetch(); //retieve only one columns that is present in the array
    return $product;

}

function  insertProduct($name,$descr,$price) {
    $db = connection(); // connect to the database
    $sql = "INSERT INTO product (name, description, price) VALUES(:name, :description, :price)"; // query
    $request = $db->prepare($sql);
    $request ->execute([
        ':name' => $name,
        ':description' => $descr,
        ':price' => $price,
    ]);

    return $db->lastInsertId(); //get the last inserted id 

}

