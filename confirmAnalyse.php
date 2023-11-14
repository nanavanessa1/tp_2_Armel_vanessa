<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("chambre.jpg");
            background-size: cover; /* Ajuste la taille de l'image pour remplir le conteneur */
            background-position: center; /* Positionne l'image au centre */
            display: center;
            align-items: right;
            justify-content: center;
            height: 92vh;
            margin: 5;
            color:white;
        }

        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérification des données postées et affichage pour vérification
    echo"<h1>ENREGISTREMENT</h1>";
    foreach ($_POST as $key => $value) {
        echo "<strong>$key:</strong> $value <br>";
    }

    // Connexion à la base de données et enregistrement des données ici
}
?>