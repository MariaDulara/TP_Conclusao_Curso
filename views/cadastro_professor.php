<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/cad.css">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
</head>
<body>
    <div class="box">
        <div class="img-box">
            <a href="index.php"><img src="../views/imagens/proz.png"></a>
        </div>
        <div class="form-box">
            <h2><a href="index.php"> Início &nbsp&nbsp</a>
            <form action="#">
                <div class="input-group">
                    <label for="Departamento">Departamento</label>
                    <input type="text" id="nome" placeholder="Digite o seu Departamento" required>
                </div>

                <div class="input-group">
                    <label for="Saário Base">Salário Base</label>
                    <input type="int" id="salario" placeholder="Digite o seu Salário" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Benefícios</label>
                    <input type="int" id="benefincios" placeholder="Digite seus benefícios" required>
                </div>

                <div class="input-group w50">
                    <label for="Descontos">Descontos</label>
                    <input type="int" id="Descontos" placeholder="Descontos" required>
                </div>

                <div class="input-group">
                    <button>Adicionar Professor</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>