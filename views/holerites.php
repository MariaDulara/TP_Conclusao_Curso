<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de Pagamento</title>
    <link rel="stylesheet" href="estilo/cad.css">
    <link rel="shortcut icon" href="imagens/logo-proz.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #593493;
            margin: 0;
            padding: 20px;
        }

        h2 {

            text-align:center;
            color: #593493;
        }

        label {
            display: inline-block;
            margin-bottom: 10px;
            color: #ccc;
        }

        select, input[type="number"], button {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #593493;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #f05b16;
        }
      
        button {
      
        }
   
            
            .container {
    display: flex;
    background-color: #ccc;
}

.coluna {
    flex: 1; /* Cresce para ocupar espaço disponível */
    padding: 10px;
    border: 1px solid #ccc;
}


      
        
    </style>
</head>
<body>
<div class="container">
      <div class="coluna">
    <h2>Folha de Pagamento</h2>
    <form>
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
      </form>
      </div>
      </div>
        </select>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1900" max="2099" value="2024">

        <button type="submit">Gerar Folha de Pagamento</button>
        <button type="submit"><img src="imagens/proz.png"">
    </form>
</body>
</html>
