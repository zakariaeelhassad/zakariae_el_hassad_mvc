<?php 
function obtenirConnexion(){
    $host ="localhost";
    $username = "root";
    $password = "";
    $database = "mvc";

    $conn = mysqli_connect($host , $username , $password , $database);
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
    return $conn;
}
?>
