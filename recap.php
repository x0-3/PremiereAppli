<?php

//* we do a session_start because we will need to go 
// thru the array
session_start();// start session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
</head>
<body>

    <?php 
    var_dump($_SESSION);
    // if there is no products in the session than write
    if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
        echo "<p>Aucun produit en session</p>";
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
                "</tbody>";
        
        // execute product by product the same instructions that will show inside the table
        $totalGeneral = 0;
        foreach($_SESSION['products'] as $index => $product){

            // write products info inside a table
            echo "<tr>",
                    "<td>" .$index. "<td>",
                    "<td>" .$product['name']. "<td>",
                    "<td>" .number_format($product['price'],2, ",", "&nbsp"). "&nbsp;€ <td>",
                    "<td>" .$$product['price']. "<td>",
                    "<td>" .$$product['qtt']. "<td>",
                    "<td>" .number_format($product['total'],2, ",", "&nbsp"). "&nbsp;€ <td>",
                    "<td>" .$$product['total']. "<td>",
                "</tr>";
            $totalGeneral+=$product['total'];// add product total to the general total
        }
        echo "<tr>",
                "<td colspan=4>Total général : </td>",
                "<td><strong>" .number_format($totalGeneral,2, ",", "&nbsp"). "&nbsp;€ </strong></td>",
            "</tr>",
            "</tbody>",
            "</table>";
    }
    ?> 

</body>
</html>