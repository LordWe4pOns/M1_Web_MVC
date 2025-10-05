<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User List</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-8">
<h1 class="text-4xl font-bold text-white text-center mb-10">User list</h1>
<div class="overflow-x-auto mx-auto max-w-5xl rounded-2xl border border-white/20 bg-white/10 backdrop-blur-lg shadow-2xl">
    <table class="w-full text-white text-sm">
        <thead class="bg-white/20 uppercase text-white/90">
        <tr>
            <th class="px-4 py-3 text-left">ID</th>
            <th class="px-4 py-3 text-left">Login</th>
            <th class="px-4 py-3 text-left">Account ID</th>
            <th class="px-4 py-3 text-left">Email</th>
            <th class="px-4 py-3 text-left">Created</th>
            <th class="px-4 py-3 text-left">Last connection</th>
            <th class="px-4 py-3 text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $u): ?>
            <tr class="border-t border-white/10 hover:bg-white/10">
                <td class="px-4 py-3"><?= $u['user_id'] ?></td>
                <td class="px-4 py-3"><?= htmlspecialchars($u['user_login']) ?></td>
                <td class="px-4 py-3"><?= htmlspecialchars($u['user_compte_id']) ?></td>
                <td class="px-4 py-3"><?= htmlspecialchars($u['user_mail']) ?></td>
                <td class="px-4 py-3"><?= htmlspecialchars($u['user_date_new']) ?></td>
                <td class="px-4 py-3"><?= htmlspecialchars($u['user_date_login']) ?></td>
                <td class="px-4 py-3 text-center">
                    <a href="index.php?action=user_delete&id=<?= $u['user_id'] ?>" onclick="return confirm('Supprimer cet utilisateur ?')" class="rounded-lg bg-red-500/80 hover:bg-red-600 text-white font-semibold px-3 py-1 transition">🗑️ Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>