<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style2.css">
    <title>Folha de Pagamento</title>
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h2>Relatórios de Pagamento</h2>
        <a href="dashboard - Copia.php" class="home-link">
            <img src="imagens/proz.png" alt="Home">
        </a>
    </header>

    <main>
        <form action="" method="post">
            <fieldset>
                <legend>Filtros</legend>
                <div class="input-group">
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
                <button type="submit">Gerar Folha de Pagamento</button>
            </fieldset>
        </form>
    </main>
</body>
</html>
