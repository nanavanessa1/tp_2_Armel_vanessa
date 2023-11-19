<?php


function createAddress($mysql, $data)
{
    global $conn;
    session_start();
    $conn = $_SESSION['connexion'];
    /**
     * Création du'une requete SQL préparée 
     * en vue  d'une insertion 
     */
    $query = "INSERT INTO address VALUES (NULL,?,?, ?, ?, ?)";

    /**
     * utilisation de la fonction php mysqli_prepare() 
     * pour préparer la requete et créer le statement.
     * Cela vérifie que la connexion est bonne 
     * et que la requete est valide sur la DB utilisée
     */
    $stmt = mysqli_prepare($mysql, $query);
//$conn
    if ($stmt = mysqli_prepare($mysql, $query)) {
        /** Lecture des marqueurs (les 3 "?" dans la query)
         * Et on bind les param 
         * en indiquant leur type ( s = string, i = integer)
         * en donnant la valeur des param a inserer dans la DB ($data[key])
         */
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode'],

        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}
?>