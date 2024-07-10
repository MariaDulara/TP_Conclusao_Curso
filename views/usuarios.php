<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/cad.css">
    <title>Login</title>
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
</head>
<body>
    <div class="box">
        <div class="img-box">
            <a href="index.php"><img src="../views/imagens/proz.png"></a>
        </div>
        <div class="form-box">
            <h2><a href="index.php">Início &nbsp&nbsp</a>
            <h2><a href="cadastro_professor.php">Cadastro &nbsp&nbsp</a>
            <form action="usuarios_action.php" method="post">
                <div class="input-group">
                    <label for="Departamento">Email</label>
                    <input type="email" id="email" placeholder="Digite o seu e-mail" required>
                </div>

                <div class="input-group">
                    <label for="Saário Base">Login</label>
                    <input type="text" id="login" placeholder="Digite o seu login" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite sua senha" required>
                    
                </div>
                <div class="input-group">
                    <button>Login</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>