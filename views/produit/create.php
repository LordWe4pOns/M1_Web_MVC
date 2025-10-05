<h1>Ajouter un produit</h1>
<form method="POST">
    <label for="type_p">Type:</label>
    <input type="text" id="type_p" name="type_p" required>
    <br>

    <label for="designation_p">Désignation:</label>
    <input type="text" id="designation_p" name="designation_p" required>
    <br>

    <label for="prix_ht">Prix HT:</label>
    <input type="number" step="0.01" id="prix_ht" name="prix_ht" required>
    <br>

    <label for="date_in">Date:</label>
    <input type="date" id="date_in" name="date_in" required>
    <br>

    <label for="stock_p">Stock:</label>
    <input type="number" id="stock_p" name="stock_p" value="0">
    <br>
    
    <button type="submit">Save</button>
</form>