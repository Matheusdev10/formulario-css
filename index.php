<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

   <style>
      .container{
      display:flex;
      line-height: 50px;
    }
</style>

<body>
  <div class="container"> 
  <form method="get" action="cores.php">
  <label for="itxt">Texto: </label>
  <input type = "text" name = "t" id="itxt"/> <br/>
  <label for="itam">Tamanho</label>
    <select name = "tam" id="itam">
    <option value = "8pt">8pt</option>
    <option value = "10pt">10pt</option>
    <option value = "14pt">14pt</option>
    <option value = "20pt">20pt</option>
    <option value = "40pt">40pt</option>
</select> <br/>
<label for = "icor">Cor: </label>
<input type = "color" name = "cor" id="icor"/> <br/>
<input type = "submit" value = "Gerar"/> 
</form>
  </div>
</body>
</html>