<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-6">
    <header class="mx-auto mb-5 flex max-w-5xl items-center justify-between">
        <h1 class="text-3xl font-semibold text-white">Your profile</h1>
        <button onclick="window.location.href='index.php?action=logout';" class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">Logout</button>
        <button onclick="window.location.href='index.php?action=user_list';" class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">User list</button>
        <button onclick="window.location.href='index.php?action=produit_list';" class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">Product list</button>
        <button onclick="window.location.href='index.php?action=produit_create';" class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">Create product</button>
    </header>

    <main class="mx-auto mt-6 max-w-5xl">
        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-xl shadow-2xl p-6 md:p-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold text-white">Hello, <?= htmlspecialchars($user['user_login']) ?>! 🎉</h2>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="rounded-xl border border-white/20 bg-white/5 p-5">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-white/80">Identifiers</h3>
                    <dl class="mt-3 space-y-2 text-white">
                        <div class="flex items-center justify-between">
                            <dt class="text-white/80">ID</dt>
                            <dd class="font-medium"><?= htmlspecialchars($user['user_id']) ?></dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-white/80">Account ID</dt>
                            <dd class="font-medium"><?= htmlspecialchars($user['user_compte_id']) ?></dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-white/80">Login</dt>
                            <dd class="font-medium"><?= htmlspecialchars($user['user_login']) ?></dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-white/80">Email</dt>
                            <dd class="font-medium"><?= htmlspecialchars($user['user_mail'] ?? 'Unknown') ?></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>

    <footer class="mx-auto mt-8 max-w-5xl text-center text-xs text-white/70">
        © <?php echo date('Y'); ?> — App
    </footer>
</body>
</html>
