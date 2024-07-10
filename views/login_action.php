<!DOCTYPE html>
<html>
<head>
    <title>Login - ERP Folha de Pagamento</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Login</h2>
    <form action="login_action.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
