
<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/form.css">
</head>
 
<body>
<div class="container">
        <br>
     <h1>Bem-vindo</h1>
        <form id="signin" action="login.php" method="post" onsubmit="return formv()" name="dados">
          <input type="text" placeholder="Email" name="usuario" required />
          <input type="password" placeholder="Senha" name="senha" required />
          <button id="btnform" type="submit" value="cadastrar">Entrar</button><br>
          <br>
          <center>
          <p onclick="togglepopup()" class="first-button">Não possui uma conta? <a href="formulario.html">Clique Aqui</a></p>
        </center>
        </form>
      </div>
</body>
 
</html>