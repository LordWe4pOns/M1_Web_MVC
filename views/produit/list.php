<h1>Liste des produits</h1>
<a href="index.php?action=produit_create">➕ Ajouter un produit</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Désignation</th>
        <th>Prix HT</th>
        <th>Date</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($produits as $p): ?>
        <tr>
            <td><?= $p['id_p'] ?></td>
            <td><?= htmlspecialchars($p['type_p']) ?></td>
            <td><?= htmlspecialchars($p['designation_p']) ?></td>
            <td><?= $p['prix_ht'] ?></td>
            <td><?= $p['date_in'] ?></td>
            <td><?= $p['stock_p'] ?></td>
            <td>
                <a href="index.php?action=produit_edit&id=<?= $p['id_p'] ?>">✏️ Modifier</a>
                <a href="index.php?action=produit_delete&id=<?= $p['id_p'] ?>" onclick="return confirm('Supprimer ?')">🗑️ Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>