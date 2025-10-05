<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <h1>Hello, <?= htmlspecialchars($user['user_login']) ?> ! 🎉</h1>

    <h2>Details :</h2>
    <ul>
        <li><strong>ID :</strong> <?= htmlspecialchars($user['user_id']) ?></li>
        <li><strong>Account ID :</strong> <?= htmlspecialchars($user['user_compte_id']) ?></li>
        <li><strong>Login :</strong> <?= htmlspecialchars($user['user_login']) ?></li>
        <li><strong>Email :</strong> <?= htmlspecialchars($user['user_mail'] ?? 'Unknown') ?></li>
    </ul>

    <form method="post" action="index.php?action=logout">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
