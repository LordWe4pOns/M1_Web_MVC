<h1>User list</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Account ID</th>
        <th>Email</th>
        <th>Created</th>
        <th>Last connection</th>
    </tr>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u['user_id'] ?></td>
            <td><?= htmlspecialchars($u['user_login']) ?></td>
            <td><?= htmlspecialchars($u['user_compte_id']) ?></td>
            <td><?= $u['user_mail'] ?></td>
            <td><?= $u['user_date_new'] ?></td>
            <td><?= $u['user_date_login'] ?></td>
            <td>
                <a href="index.php?action=user_delete&id=<?= $u['user_id'] ?>" onclick="return confirm('Delete ?')">🗑️ Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>