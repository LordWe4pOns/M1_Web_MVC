<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liste des produits</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<?php
session_start();

if (!isset($user) && isset($_SESSION['admin'])) {
    $user['admin'] = $_SESSION['admin'];
}
?>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-10">
            <h1 class="text-4xl font-bold text-white">Product list</h1>
            <?php
            if (!empty($user['admin']) && $user['admin'] == 1) :
            ?>
            <a href="index.php?action=produit_create" class="inline-flex items-center gap-2 rounded-xl bg-white/90 text-indigo-700 font-semibold px-4 py-2 hover:bg-white transition">
                ➕ Add new product
            </a>
            <?php endif; ?>
        </div>



        <div class="overflow-x-auto rounded-2xl border border-white/20 bg-white/10 backdrop-blur-lg shadow-2xl">
            <table class="w-full text-white text-sm">
                <thead class="bg-white/20 uppercase text-white/90">
                    <tr>
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3 text-left">Type</th>
                        <th class="px-4 py-3 text-left">Designation</th>
                        <th class="px-4 py-3 text-left">Price without taxes</th>
                        <th class="px-4 py-3 text-left">Date</th>
                        <th class="px-4 py-3 text-left">Stock</th>
                        <?php
                        if (!empty($user['admin']) && $user['admin'] == 1) :
                        ?>
                        <th class="px-4 py-3 text-center">Actions</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produits as $p): ?>
                        <tr class="border-t border-white/10 hover:bg-white/10 transition">
                            <td class="px-4 py-3"><?= $p['id_p'] ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($p['type_p']) ?></td>
                            <td class="px-4 py-3"><?= htmlspecialchars($p['designation_p']) ?></td>
                            <td class="px-4 py-3"><?= $p['prix_ht'] ?></td>
                            <td class="px-4 py-3"><?= $p['date_in'] ?></td>
                            <td class="px-4 py-3"><?= $p['stock_p'] ?></td>
                            <?php
                            if (!empty($user['admin']) && $user['admin'] == 1) :
                            ?>
                            <td class="px-4 py-3 text-center flex justify-center gap-3">
                                <a href="index.php?action=produit_edit&id=<?= $p['id_p'] ?>" class="rounded-lg bg-blue-500/80 hover:bg-blue-600 text-white font-semibold px-3 py-1 transition">✏️ Edit</a>
                                <a href="index.php?action=produit_delete&id=<?= $p['id_p'] ?>" onclick="return confirm('Delete ?')" class="rounded-lg bg-red-500/80 hover:bg-red-600 text-white font-semibold px-3 py-1 transition">🗑️ Delete</a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>