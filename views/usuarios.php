<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>login</title>
    <link rel="shortcut icon" href="imagens/bandeira-menu.ico" type="image/x-icon">
</head>

<body>
    <div class="box">
        <div class="img-box">
            <a href="index.html"><img src="../views/images.png"></a>
        </div>
        <div class="form-box">
            <h2><a href="index.html"> Inicio &nbsp&nbsp</a>
            <h2><a href="cadastro_professor.php"> Cadastro &nbsp&nbsp</a>
            <form action="#">
                <div class="input-group">
                    <label for="Departamento"> Email </label>
                    <input type="email" id="email" placeholder="Digite o seu Email" required>
                </div>

                <div class="input-group">
                    <label for="Saário Base">Login</label>
                    <input type="text" id="login" placeholder="Digite o seu Login" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">senha</label>
                    <input type="password" id="senha" placeholder="Digite sua Senha" required>
                    
                </div>
                <div class="input-group">
                    <button>Login</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>