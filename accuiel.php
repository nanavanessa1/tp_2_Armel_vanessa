<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Veuillez entrer le nombre d'adresses svp </title>
    <style>
        title{
            color:black;
        }
        body{
            background-image: url("luxury.jpg");
            background-size: cover; /* Ajuste la taille de l'image pour remplir le conteneur */
            background-position: center; /* Position l'image au centre */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 92vh;
            margin: 5;
        }
        .highlight{
            background-color: yellow; 
        }
        
        .groupe{
            color:black;
        }
        .content{
            color :green;
            display: center;
            
        }
        .group{
            display:center;
        }
         /* .red-button {
        background-color: red;
        color: white; 
        }  */
        label{
            color: white;
            display: center;
            
          
        }
        
        
        </style>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="groupe">
    <h1 class ="highlight">BIENVENUE A PLAZA HOTEL</H1>

<div class ="content">
      <h2>Veuillez entrez le  nombre d'adresses</h2>
        <form method="post" action="analyse.php">
            <div >
                <label for="nombre_addresses">Combien d'adresses avez-vous ?</label></br>
                <input type="number" id="nombre_addresses" name="nombre_addresses" min="1" required>
            </div>
            <div class="group">
           
            <input type="submit" value="Suivant" style="background-color: orange; color: white;">
    </div>
        </form>
    </div>
    
</body>
</html>