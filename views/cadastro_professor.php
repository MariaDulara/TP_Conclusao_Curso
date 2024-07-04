<html>
      <head>
            <title>Cadastro Professores</title>
      </head>
      <body>
            <h2>Cadastro Professores</h2>

            <form action="" method="post">
                  <label for="departamento">Departamento: </label>
                  <input type="text" id="departamento" nome = "departamento">
                  <label for="salario_base">Salário Base: </label>
                  <input type="number" id="salario_base" step="0.01">
                  <label for="benefícios">Benefícios: </label>
                  <input type="number" id="benefícios" step="0.01" name="benefícios">
                  <label for="descontos">Descontos: </label>
                  <input type="number" id="descontos" step="0.01" name="descontos">
                  <button type="submit">Adicionar Professor</button>
            </form>
      </body>
</html>