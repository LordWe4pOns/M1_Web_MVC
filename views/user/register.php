<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 flex items-center justify-center p-6">
<div class="w-full max-w-lg">
    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-xl shadow-2xl">
        <div class="px-8 pt-8 pb-4 text-center">
            <h1 class="text-3xl font-semibold text-white tracking-tight">Create your account</h1>
        </div>

        <?php if (!empty($message)) : ?>
            <div class="mx-8 mb-4 rounded-lg bg-yellow-400/20 px-4 py-3 text-sm text-yellow-100 border border-yellow-300/20">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="" class="px-8 pb-8 grid grid-cols-1 gap-5">
            <div>
                <label for="login" class="block text-sm font-medium text-white">Login</label>
                <input id="login" name="login" type="text" required class="mt-1 w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input id="password" name="password" type="password" required class="mt-1 w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
                </div>
                <div>
                    <label for="account_id" class="block text-sm font-medium text-white">Account ID</label>
                    <input id="account_id" name="account_id" type="number" required class="mt-1 w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-white">Email address</label>
                <input id="email" name="email" type="email" required class="mt-1 w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50" />
            </div>

            <div class="pt-2 flex items-center gap-3">
                <input type="submit" value="Register" name="register" class="inline-flex cursor-pointer items-center justify-center rounded-xl bg-white/90 px-4 py-2.5 text-sm font-semibold text-indigo-700 transition hover:bg-white" />
                <button onclick="window.location.href='index.php?action=login';" type="button" class="inline-flex items-center justify-center rounded-xl border border-white/30 bg-transparent px-4 py-2.5 text-sm font-medium text-white hover:bg-white/10">
                    I already have an account
                </button>
            </div>
        </form>
    </div>
    <p class="mt-6 text-center text-xs text-white/70">© <?php echo date('Y'); ?> — App</p>
</div>
</body>
</html>
