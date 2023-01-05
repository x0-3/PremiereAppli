<?php
session_start(); // start a session

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

// redirect user to this URL
header("Location:index.php");