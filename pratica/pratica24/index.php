<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <form name="formulario" action="resposta.php" method="get">
      <div>
        <label for="nome">nome: </label> <br>
        <input type="text" name="nome" id="nome" placeholder="digite seu nome" maxlength="30">
      </div>
      
      <div>
        <label for="senha">senha: </label> <br>
        <input type="password" name="senha" id="senha" placeholder="digite uma senha" maxlength="24" size="6">
      </div>
      
      <div>
        <label for="m">masculino</label> <br>
        <input type="radio" name="genero" id="genero" value="masculino">
        <input type="radio" name="genero" id="genero" value="feminino">
      </div>
      
      <div>
        <label for="turno">selecione turno</label> <br>
        <input type="checkbox" name="turno" id="turno" value="manhã">
        <input type="checkbox" name="turno" id="turno" value="tarde">
        <input type="checkbox" name="turno" id="turno" value="noite">
      </div>
      
      <div>
        <label for="cidade">selecione a cidade</label> <br>
        <select name="cidade" id="cidade">
          <option value="Luanda">Luanda</option>
          <option value="Benguela">Benguela</option>
          <option value="Cabinda">Cabinda</option>
          <option value="Bie">Bie</option>
        </select>
      </div>
      
      <div>
        <input type="submit" value="enviar" name="enviar" id="btn">
        <input type="hidden" name="btnOK" value="1" id="btn">
      </div>
    </form>
  </body>
</html>