<?php
    session_start();
unset($_SESSION['usuarioId'],$_SESSION['usuarioNome']);
$_SESSION['login']= "Deslogado do sistema com sucesso!";
header("location:index.php");

?>
