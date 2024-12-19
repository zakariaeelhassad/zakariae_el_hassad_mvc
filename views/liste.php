<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <div>
        <p><a href="index.php?action=ajouter">Ajouter un produit</a></p>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php while ($ligne = mysqli_fetch_assoc($produits)): ?>
                <tr>
                    <td><?php echo $ligne['name']; ?></td>
                    <td><?php echo $ligne['price']; ?> €</td>
                    <td><?php echo $ligne['description']; ?></td>
                    <td>
                        <a href="index.php?action=supprimer&id=<?php echo $ligne['id']; ?>" 
                           onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
