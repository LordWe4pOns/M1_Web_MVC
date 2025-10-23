<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User List</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 p-8">
    <!-- Header -->
    <header class="mx-auto mb-5 flex max-w-5xl items-center justify-between">
        <h1 class="text-3xl font-semibold text-white">User list</h1>
        <button onclick="window.location.href='index.php?action=profile';"
                class="rounded-xl bg-white/90 px-4 py-2 text-sm font-semibold text-indigo-700 hover:bg-white transition">
            Go back
        </button>
    </header>

    <?php
    session_start();
    
    if (!isset($user) && isset($_SESSION['admin'])) {
        $user['admin'] = $_SESSION['admin'];
    }
    ?>

    <!-- Table -->
    <div class="overflow-x-auto mx-auto max-w-5xl rounded-2xl border border-white/20 bg-white/10 backdrop-blur-lg shadow-2xl">
        <table class="w-full text-white text-sm">
            <thead class="bg-white/20 uppercase text-white/90">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Login</th>
                    <th class="px-4 py-3 text-left">Email</th>
                    <th class="px-4 py-3 text-left">Created</th>
                    <th class="px-4 py-3 text-left">Last connection</th>
                    <?php
                    if (!empty($user['admin']) && $user['admin'] == 1) :
                        ?>
                    <th class="px-4 py-3 text-center">Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr class="border-t border-white/10 hover:bg-white/10 transition">
                        <td class="px-4 py-3"><?= $u['user_id'] ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($u['user_login']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($u['user_mail']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($u['user_date_new']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($u['user_date_login']) ?></td>
                        <?php
                        if (!empty($user['admin']) && $user['admin'] == 1) :
                        ?>
                        <td class="px-4 py-3 text-center flex justify-center gap-2">
                            <!-- Edit -->
                            <button type="button"
                                onclick="openModal('<?= $u['user_id'] ?>', '<?= htmlspecialchars($u['user_login'], ENT_QUOTES) ?>', '<?= htmlspecialchars($u['user_mail'], ENT_QUOTES) ?>')"
                                class="rounded-lg bg-blue-500/80 hover:bg-blue-600 text-white font-semibold px-3 py-1 transition">
                                ✏️ Edit
                            </button>
                            
                            <!-- Delete -->
                            <a href="index.php?action=user_delete&id=<?= $u['user_id'] ?>"
                               onclick="return confirm('Delete this user ?')"
                               class="rounded-lg bg-red-500/80 hover:bg-red-600 text-white font-semibold px-3 py-1 transition">
                                🗑️ Delete
                            </a>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal caché -->
    <div id="editModal" class="hidden fixed inset-0 flex items-center justify-center bg-black/50 z-50">
        <div class="bg-white rounded-2xl p-6 w-96 shadow-2xl">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Edit User</h2>
            <form id="editForm" method="POST">
                <input type="hidden" name="user[user_login]" id="hiddenLogin">
                <input type="hidden" name="user[user_mail]" id="hiddenMail">

                <!-- Champs visibles -->
                <label class="block mb-2 text-sm font-medium text-gray-700">Login</label>
                <input type="text" id="editLogin"
                       class="w-full mb-3 rounded-lg border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">

                <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="editMail"
                       class="w-full mb-3 rounded-lg border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" onclick="closeModal()"
                            class="px-4 py-2 rounded-lg bg-gray-300 text-gray-800 hover:bg-gray-400 transition">
                        Cancel
                    </button>
                    <button type="submit"
                            class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Modal -->
    <script>
    function openModal(id, login, mail) {
        // Préremplit les champs
        document.getElementById('editLogin').value = login;
        document.getElementById('editMail').value = mail;

        // Met à jour l’action du formulaire pour correspondre à ton ancien code
        document.getElementById('editForm').action = `index.php?action=user_edit&id=${id}`;

        // Affiche le modal
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('editModal').classList.add('hidden');
    }

    // Synchronise les champs visibles avec les champs cachés avant l’envoi
    document.getElementById('editForm').addEventListener('submit', function() {
        document.getElementById('hiddenLogin').value = document.getElementById('editLogin').value;
        document.getElementById('hiddenMail').value = document.getElementById('editMail').value;
    });

    // Fermer avec Échap
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeModal();
    });

    // Fermer en cliquant à l’extérieur du modal
    document.getElementById('editModal').addEventListener('click', e => {
        if (e.target.id === 'editModal') closeModal();
    });
    </script>
</body>
</html>
