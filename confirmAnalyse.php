<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérification des données postées et affichage pour vérification
    foreach ($_POST as $key => $value) {
        echo "<strong>$key:</strong> $value <br>";
    }

    // Connexion à la base de données et enregistrement des données ici
}
?>