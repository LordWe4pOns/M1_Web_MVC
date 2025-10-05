<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 flex items-center justify-center p-6">
<div class="bg-white/10 backdrop-blur-xl rounded-xl p-8 shadow-2xl border border-white/20 max-w-md w-full">
    <h1 class="text-3xl font-bold mb-6 text-center text-white">Ajouter un produit</h1>
    <form method="POST" class="space-y-4">
        <div>
            <label for="type_p" class="block text-sm font-medium text-white">Type:</label>
            <input type="text" id="type_p" name="type_p" required class="bg-white/10 border border-white/30 text-white placeholder-white/70 focus:ring-2 focus:ring-white/50 px-4 py-2 w-full mt-1 rounded-md" />
        </div>
        <div>
            <label for="designation_p" class="block text-sm font-medium text-white">Désignation:</label>
            <input type="text" id="designation_p" name="designation_p" required class="bg-white/10 border border-white/30 text-white placeholder-white/70 focus:ring-2 focus:ring-white/50 px-4 py-2 w-full mt-1 rounded-md" />
        </div>
        <div>
            <label for="prix_ht" class="block text-sm font-medium text-white">Prix HT:</label>
            <input type="number" step="0.01" id="prix_ht" name="prix_ht" required class="bg-white/10 border border-white/30 text-white placeholder-white/70 focus:ring-2 focus:ring-white/50 px-4 py-2 w-full mt-1 rounded-md" />
        </div>
        <div>
            <label for="date_in" class="block text-sm font-medium text-white">Date:</label>
            <input type="date" id="date_in" name="date_in" required class="bg-white/10 border border-white/30 text-white placeholder-white/70 focus:ring-2 focus:ring-white/50 px-4 py-2 w-full mt-1 rounded-md" />
        </div>
        <div>
            <label for="stock_p" class="block text-sm font-medium text-white">Stock:</label>
            <input type="number" id="stock_p" name="stock_p" value="0" class="bg-white/10 border border-white/30 text-white placeholder-white/70 focus:ring-2 focus:ring-white/50 px-4 py-2 w-full mt-1 rounded-md" />
        </div>
        <button type="submit" class="bg-white text-indigo-700 hover:bg-white/90 rounded-lg px-4 py-2 font-semibold shadow-md">Save</button>
    </form>
</div>
</body>
</html>