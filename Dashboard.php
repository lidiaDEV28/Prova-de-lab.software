<?php
      session_start();
?>

<DOCTYPE html>
<html>
  <header>
        <title></title>
  </header>
  <body>
      <h1>Olá,sejam bem vindo
        <?php
              echo $_SESSION['usuarioNome'];
        ?>
      </h1>
          <a href= "sair.php"</a>
  </body>
</html>
