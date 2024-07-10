<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/relatorio.css">
    <title>Relatório de Pagamento</title>
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
</head>
<body>
    <!--<header class="header">
        <nav class="nav">
            <a href="dashboard.php"><img src="../views/imagens/proz.png"></a>
            <div class="nav-list">
                <h2>Relatório de Pagamento</h2>
            </div>
        </nav>
    </header>-->
    <!--<header>
        <h2>Relatórios de Pagamento</h2>
        <a href="dashboard - Copia.php" class="home-link">
            <img src="imagens/proz.png" alt="Home">
        </a>
    </header>-->

    <main>
        <form action="" method="post">

                <div class="input-group">
                    <a href="dashboard.php"><h2>Início</h2></a>
                    <h2>Relatório de Pagamento</h2>
                    <label for="departamento">Departamento:</label>
                    <input type="text" name="departamento" id="departamento">
                </div>
                <div class="input-group">
                    <label for="mes">Mês:</label>
                    <select name="mes" id="mes">
                        <option value="jan">Janeiro</option>
                        <option value="fev">Fevereiro</option>
                        <option value="mar">Março</option>
                        <option value="abr">Abril</option>
                        <option value="mai">Maio</option>
                        <option value="jun">Junho</option>
                        <option value="jul">Julho</option>
                        <option value="ago">Agosto</option>
                        <option value="set">Setembro</option>
                        <option value="out">Outubro</option>
                        <option value="nov">Novembro</option>
                        <option value="dez">Dezembro</option>
                    </select>
                    <label for="ano">Ano:</label>
                    <input type="number" id="ano" name="ano">
                </div>
                <div class="botao"><button type="submit">Gerar Folha de Pagamento</button></div>
            
        </form>
    </main>
</body>
</html>
