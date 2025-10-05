<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <h2><?= htmlspecialchars($message) ?></h2>

    <form method="POST" action="">
        <label for="login">Login</label>
        <input 
            id="login" 
            name="login" 
            type="text" 
            placeholder="Type your login..." 
            required
        >
        <br>

        <label for="password">Password</label>
        <input 
            id="password" 
            name="password" 
            type="password" 
            placeholder="Type your password..." 
            required
        >
        <br>

        <input type="submit" value="Login">
        <button onclick="window.location.href='index.php?action=register';" type="button">
            I don't have an account
        </button>
    </form>
</body>
</html>
