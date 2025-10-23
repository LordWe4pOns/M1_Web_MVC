<?php
// Assure-toi que la variable $user est bien accessible ici
// (tu peux la passer depuis le contrôleur ou la session)
if (!isset($user) && isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

echo '
<header class="mx-auto mb-5 flex max-w-5xl items-center justify-between">
    <h1 class="text-3xl font-semibold text-white">Your profile</h1>
    <div class="flex gap-2">
        <button onclick="window.location.href=\'index.php?action=logout\';" 
            class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">
            Logout
        </button>
        <button onclick="window.location.href=\'index.php?action=user_list\';" 
            class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">
            User list
        </button>
        <button onclick="window.location.href=\'index.php?action=produit_list\';" 
            class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">
            Product list
        </button>';

// ✅ On n'affiche "Create product" que si l'utilisateur est admin
if (!empty($user['admin']) && $user['admin'] == 1) {
    echo '
        <button onclick="window.location.href=\'index.php?action=produit_create\';" 
            class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white">
            Create product
        </button>';
}

echo '
    </div>
</header>';
?>
