<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/cad.css">
    <title>Folha de Pagamento</title>
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
</head>
      <body>
            <h2>Folha de Pagamento</h2>
            <label for="mes" nome="mes">Mês: </label>
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
            <label for="ano">Ano</label>
            <input type="number" id="ano" name="ano">

            <button type="submit">Gerar Folha de Pagamento</button>
      </body>
</html>