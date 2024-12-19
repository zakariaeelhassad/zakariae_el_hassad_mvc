<?php
require_once './config/base_donnees.php';
require_once './models/produit.php';
require_once './controllers/produit_controller.php';

$conn = obtenirConnexion();

$action = $_GET['action'] ?? 'liste';

switch ($action) {
    case 'liste':
        gererListe($conn);
        break;
    case 'ajouter':
        gererAjout($conn);
        break;
    case 'supprimer':
        gererSuppression($conn);
        break;
    default:
        gererListe($conn);
        break;
}

mysqli_close($conn);