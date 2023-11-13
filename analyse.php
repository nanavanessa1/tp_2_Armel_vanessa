<!DOCTYPE html>
<html lang="en">

<title>Veuillez entrer le nombre d'adresse svp </title>
    <style>
        title{
            color:black;
        }
        body{
            background-image: url("room.jpg");
            background-size: cover; /* Ajuste la taille de l'image pour remplir le conteneur */
            background-position: center; /* Positionne l'image au centre */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 92vh;
            margin: 5;
        }
        .class{

        }
        </style>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <h1><b>Entrez les adresses</b></h1>
        <form method="post" action="confirmAnalyse.php">
            <?php
            
            //$_SERVER['REQUEST_METHOD'] est une variable superglobale en PHP
            // qui contient la méthode de requête utilisée pour accéder à la page actuelle. 
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nombre_addresses = isset($_POST['nombre_addresses']) ? (int)$_POST['nombre_addresses'] : 0; // verifie si nombre_adresses est dans $_post si ce n'est pas le 
                //cas ,la valeur prendra sera = 0
                for ($id = 1; $id <= $nombre_addresses; $id++) {
                    echo "<div class='group'>";
                    echo "<h3>Adresse $id</h3>";
                    echo "<label for='street$id'>Street:</label>";
                    echo "<input type='text' id='street$id name='street$id' maxlength='50' required><br>";

                    echo "<label for='street_nb$id'>Street Number:</label>";
                    echo "<input type='number' id='street_nb$id' name='street_nb$id' required><br>";

                    echo "<label for='type$id'>Type:</label>";
                    echo "<input type='text' id='type$id' name='type$id' maxlength='20' required><br>";

                    echo "<label for='city$id'>City:</label>";
                    
                    echo "<select id='city$id' name='city$id'>
                <option value='Montreal'>Montreal</option>
                <option value='Laval'>Laval</option>
                <option value='Toronto'>Toronto</option>
                <option value='Quebec'>Quebec</option>
               </select><br>";
                     echo "<label for='zipcode$id'>Zipcode:</label>";
                    echo "<input type='text' id='zipcode$id' name='zipcode$id' maxlength='6' required><br>";
                    echo "</div>";
                }

                echo "<div class='group'>";
                echo "<input type='submit' value='Valider'>";
                echo "</div>";
            } else {
                echo "<p>une erreur est survenue sur le nombre_d'adresse!!!!!</p>";
            }
            ?>
        </form>
    </div>
</body>
</html>
