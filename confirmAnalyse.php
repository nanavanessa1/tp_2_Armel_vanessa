<?php 

 require('functions.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {

$mysql = mysqli_connect("localhost", "root", "", "ecom1_tp2");
$data = [
    'street' => isset($_POST['street']) ? $_POST['street'] : null,
    'street_num' => isset($_POST['street_num']) ? $_POST['street_num'] : null,
    'city' => isset($_POST['city']) ? $_POST['city'] : null,
    'type' => isset($_POST['type']) ? $_POST['type'] : null,
    'zipcode' => isset($_POST['zipcode']) ? $_POST['zipcode'] : null,
];
createAddress($mysql, $data);
    foreach ($_POST as $key => $value) {
       echo "<b>$key:</b> $value <br>";
    
       
    }};




?>
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
    <h1>ENREGISTREMENT</H1>
</body>
</html>

<?php

?>