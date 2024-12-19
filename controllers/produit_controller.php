<?php
function gererListe($conn) {
    $produits = obtenirTousProduits($conn);
    require './views/liste.php';
}

function gererAjout($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'] ?? '';
        $prix = $_POST['prix'] ?? 0;
        $description = $_POST['description'] ?? '';

        if (ajouterProduit($conn, $nom, $prix, $description)) {
            header("Location: index.php?action=liste");
            exit;
        }
    }
    require './views/ajouter.php';
}

function gererSuppression($conn) {
    if (isset($_GET['id'])) {
        if (supprimerProduit($conn, $_GET['id'])) {
            header("Location: index.php?action=liste");
            exit;
        }
    }
}
?>