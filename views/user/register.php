<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <h2><?= htmlspecialchars($message) ?></h2>

    <form method="POST" action="">
        <label for="login">Login</label>
        <input id="login" name="login" type="text" placeholder="Type your login..." required />
        <br/>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Type your password..." required />
        <br/>

        <label for="account_id">Account ID</label>
        <input id="account_id" name="account_id" type="number" placeholder="Type your account ID..." required />
        <br/>

        <label for="email">Email address</label>
        <input id="email" name="email" type="email" placeholder="Type your email address..." required />
        <br/>

        <input type="submit" value="Register" name="register">
        <button onclick="window.location.href='index.php?action=login';" type="button">
            I already have an account
        </button>
    </form>
</body>
</html>
