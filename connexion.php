 <?php
 //require_once ("accueil.php");
 //require_once ("analyse.php");
 //require_once ("confirmAnalyse.php");
 function connexionBd() {
    $server = 'localhost';
    $userName = 'root';
    $pwd = '';
    $db = 'ecom1_tp2';
    
    $conn = mysqli_connect($server, $userName, $pwd, $db);
    if ($conn) {
        echo "Connected to the $db database successfully";
        global $conn;
         session_start();
         $_SESSION['connexion']= $conn;
    } else {
        echo "Error : Not connected to the $db database";
    }
}


?>

