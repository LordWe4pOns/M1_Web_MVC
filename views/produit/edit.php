<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modifier le produit</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 flex items-center justify-center p-6">
<div class="w-full max-w-lg bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 shadow-2xl">
    <h1 class="text-3xl font-semibold text-white text-center mb-8">Modifier le produit</h1>
    <form method="POST" class="space-y-5">
        <div>
            <label for="type_p" class="block text-sm font-medium text-white">Type</label>
            <input type="text" id="type_p" name="type_p" value="<?= htmlspecialchars($produit['type_p']) ?>" required class="mt-1 w-full rounded-xl border border-white/30 bg-white/10 px-4 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
        </div>

        <div>
            <label for="designation_p" class="block text-sm font-medium text-white">Désignation</label>
            <input type="text" id="designation_p" name="designation_p" value="<?= htmlspecialchars($produit['designation_p']) ?>" required class="mt-1 w-full rounded-xl border border-white/30 bg-white/10 px-4 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
        </div>

        <div>
            <label for="prix_ht" class="block text-sm font-medium text-white">Prix HT</label>
            <input type="number" step="0.01" id="prix_ht" name="prix_ht" value="<?= $produit['prix_ht'] ?>" required class="mt-1 w-full rounded-xl border border-white/30 bg-white/10 px-4 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
        </div>

        <div>
            <label for="date_in" class="block text-sm font-medium text-white">Date</label>
            <input type="date" id="date_in" name="date_in" value="<?= $produit['date_in'] ?>" required class="mt-1 w-full rounded-xl border border-white/30 bg-white/10 px-4 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
        </div>

        <div>
            <label for="stock_p" class="block text-sm font-medium text-white">Stock</label>
            <input type="number" id="stock_p" name="stock_p" value="<?= $produit['stock_p'] ?>" class="mt-1 w-full rounded-xl border border-white/30 bg-white/10 px-4 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
        </div>

        <div class="pt-4 text-center">
            <button type="submit" class="rounded-xl bg-white/90 text-indigo-700 font-semibold px-6 py-2.5 hover:bg-white transition">Mettre à jour</button>
        </div>
    </form>
</div>
</body>
</html>