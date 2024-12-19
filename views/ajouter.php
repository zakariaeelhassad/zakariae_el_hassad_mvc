<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prix">Prix :</label>
            <input type="number" id="prix" step="0.01" name="prix" required>
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>
    <p><a href="index.php?action=liste">Retour à la liste</a></p>
</body>
</html>
