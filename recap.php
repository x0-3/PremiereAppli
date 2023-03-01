<?php

session_start();// start session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
    <link rel="stylesheet" href="css/recap.css">
</head>
<body>
    <h1>Panier</h1>

    <?php 
    // if there is no products in the session than write
    if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
        echo "<p>Aucun produit en session...</p>";
    }else{
        // create an html table that will contain our products
        echo "<table>", 
                "<thead>",
                    "<tr>",
                        "<th>#</th>",  
                        "<th>Nom</th>",  
                        "<th>Prix</th>",  
                        "<th>Quantité</th>",  
                        "<th>Total</th>",  
                    "</tr>",
                "</thead>",
                "<tbody>";
        
        // execute product by product the same instructions that will show inside the table
        $totalGeneral = 0;
        foreach($_SESSION['products'] as $index => $product){

            // write products info inside a table
            echo "<tr>",
                    "<td>".$index."</td>",
                    "<td>".$product['name']."</td>",
                    "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    // "<td>".$product['price']."</td>",
                    "<td>".$product['qtt']."</td>",
                    "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td><a href = 'traitement.php?action=enleverProduit&id=$index'><button>-</button></a></td>",// decrease product by one
                    "<td><a href = 'traitement.php?action=augmenterProduit&id=$index'><button>+</button></a></td>",// increase product by one
                    "<td><a href = 'traitement.php?action=supprimerProduit&id=$index'><button>suprimer</button></a></td>",// clear button
                "</tr>";
            $totalGeneral+=$product['total'];// add product total to the general total
        }
        
        echo "<tr>",
                "<td colspan=4>Total général : </td>",
                "<td><strong>".number_format($totalGeneral,2, ",", "&nbsp")."&nbsp;€</strong></td>",
            "</tr>",
            "</tbody>",
            "</table>";
    }
    ?> 
    <a href="traitement.php?action=viderPanier"><button>clear</button></a>
    <a href="index.php"><button>index</button></a>
</body>
</html>