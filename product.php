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
    <?php

    require("db-functions.php");
    
    $id=$_GET['id'];

    $product = findOneById($id);

    ?>
    <br>
    <a href="index.php" type="button" class="btn btn-dark m-2">Retour</a>
    <p class="h3 m-2"><?php echo $product['name']; ?></p>
    <p class="m-2 text-muted"><?php echo $product['description']; ?></p>
    <p class="fw-bold m-2"><?php echo $product['price']; ?> €</p>
    <a href="traitement.php?action=ajouter&id=<?=$product['id']?>" type="button" class="btn btn-dark m-2">Ajouter au panier</a>
    <br>

    <?php

    ?>    
</body>
</html>



