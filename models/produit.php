<?php
function obtenirTousProduits($conn) {
    $requete = "SELECT * FROM products";
    return mysqli_query($conn, $requete);
}

function ajouterProduit($conn, $nom, $prix, $description) {
    $nom = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags($nom)));
    $prix = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags($prix)));
    $description = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags($description)));
    
    $requete = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $requete);
    mysqli_stmt_bind_param($stmt, "sds", $nom, $prix, $description);
    
    $resultat = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    return $resultat;
}

function supprimerProduit($conn, $id) {
    $id = (int) $id;
    $requete = "DELETE FROM products WHERE id = ?";
    $stmt = mysqli_prepare($conn, $requete);
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    $resultat = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    return $resultat;
}
?>