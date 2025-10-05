<h1>Modifier le produit</h1>
<form method="POST">
    <label for="type_p">Type:</label>
    <input type="text" id="type_p" name="type_p" value="<?= htmlspecialchars($produit['type_p']) ?>" required>
    <br>

    <label for="designation_p">Désignation:</label>
    <input type="text" id="designation_p" name="designation_p" value="<?= htmlspecialchars($produit['designation_p']) ?>" required>
    <br>

    <label for="prix_ht">Prix HT:</label>
    <input type="number" step="0.01" id="prix_ht" name="prix_ht" value="<?= $produit['prix_ht'] ?>" required>
    <br>

    <label for="date_in">Date:</label>
    <input type="date" id="date_in" name="date_in" value="<?= $produit['date_in'] ?>" required>
    <br>

    <label for="stock_p">Stock:</label>
    <input type="number" id="stock_p" name="stock_p" value="<?= $produit['stock_p'] ?>">
    <br>

    <button type="submit">Mettre à jour</button>
</form>