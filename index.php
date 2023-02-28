
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <a href='recap.php' type="button" class="btn btn-dark m-2">panier</a>

    <?php
    require("db-functions.php");

    findAll();

    // FIXME:
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


    ?>
</body>
</html>




