<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <h1>Hello, <?= htmlspecialchars($user['login']) ?> ! 🎉</h1>

    <h2>Details :</h2>
    <ul>
        <li><strong>ID :</strong> <?= htmlspecialchars($user['id']) ?></li>
        <li><strong>Login :</strong> <?= htmlspecialchars($user['login']) ?></li>
        <li><strong>Email :</strong> <?= htmlspecialchars($user['email'] ?? 'Unknown') ?></li>
    </ul>

    <form method="post" action="index.php?action=logout">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
