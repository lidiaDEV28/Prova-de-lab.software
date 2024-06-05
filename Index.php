<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  
  <head>
      <title>Sessão01</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  
  <body>
    
      <form action="valida.php" method="Post">
      <input type="text" name="Faça login" placeholder="Digite seu login">
      <input type="password"name="Senha" placeholder="Digite sua senha">
      <input type="Submit"value="Acessar">
      </form>
    
    <?php
          if(isset($_session['login']))
          {
              echo $_session['login'];
              unset($_session['login']);
          }

    ?>
  </body>
</html>
