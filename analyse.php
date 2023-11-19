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
        .red-button {
        background-color: red;
        color: white;
        }
        .highlight{
            background-color: white; 
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
        <h1 class="highlight">Entrez les adresses</b></h1>
        
            <?php
            require('connexion.php');

            
            if ($_SERVER["REQUEST_METHOD"] === "POST") 
            
        { 
            $conn = connexionBd();
            echo" <form method='post' action='confirmAnalyse.php'>";

                $nombre_addresses = isset($_POST['nombre_addresses']) ? (int)$_POST['nombre_addresses'] : 0; // verifie si nombre_adresses est dans $_post si ce n'est pas le 
                //cas ,la valeur prendra sera = 0
                for ($i = 1; $i <= $nombre_addresses; $i++) {
                    echo "<div class='group'>";
                    echo "<h3>Adresse $i</h3>";

                    echo "<label for='street$i'>Street:</label>";
                    echo "<input type='text' id='street$i name='street$i' maxlength='50' required><br>";

                    echo "<label for='street_nb$i'>Street Number:</label>";
                    echo "<input type='number' id='street_nb$i' name='street_nb$i' required><br>";

                    echo "<label for='type$i'>Type:</label>";
                    
                    echo "<select id='type$i' name='type$i'>
                    <option value='Facturation'>Facturation</option>
                    <option value='Livraison'>Livraison</option>
                    <option value='Expedition'>Expedition</option>
                    <option value='Retour'>Retour</option>
                   </select><br>";

                    echo "<label for='city$i'>City:</label>";
                    echo "<select id='city$i' name='city$i'>
                <option value='Montreal'>Montreal</option>
                <option value='Laval'>Laval</option>
                <option value='Toronto'>Toronto</option>
                <option value='Quebec'>Quebec</option>
               </select><br>";
                     echo "<label for='zipcode$i'>Zipcode:</label>";
                    echo "<input type='text' id='zipcode$i' name='zipcode$i' maxlength='6' required><br>";
                    echo "</div>";
                   
                    var_dump($_POST);
                }
                
                echo "<div class='group'>";
                echo "<input type='submit' value='Valider'>";
                echo "</div>";
                 
            } 
            else {
                echo "<p>une erreur est survenue sur le nombre_d'adresse!!!!!</p>";
            }
            
            ?>
        </form>
    </div>
</body>
</html>
