<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User List</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-8">
    <header class="mx-auto mb-5 flex max-w-5xl items-center justify-between">
        <h1 class="text-3xl font-semibold text-white">User list</h1>
        <button onclick="window.location.href='index.php?action=profile';" class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">Go back</button>
    </header>
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