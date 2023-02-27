<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <!-- une session contient les données stockées dans la session utilisateur côté serveur (si cette session a été demarrée au préalable) -->
 <!-- les superglobales sont des variables qui sont disponibles dans n'importe quel script php -->

    <h1>Ajouter un produit</h1>

    <form action="traitement.php?action=ajouter" method="post">
        <p>
            <label>Nom du produit :
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit :
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label>
                Quantité désirée :
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <input type="submit" id="submitButton" name="submit" value="Ajouter le produit">
        </p>
    </form>

    <button>
    <a href="recap.php">recap</a>
    </button>
</body>
</html>