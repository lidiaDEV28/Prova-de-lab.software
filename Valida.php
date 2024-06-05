<?php
  require_once("config.php");
  session_start();

if((isset($_POST['login']))&&(isset($_POST['senha'])))
{
  $usuario= $_POST['login'];
  $senha=$_POST["senha'];

  $query= "SELECT*FROM usuarios WHERE login='$usuarios'AND senha='$senha'";
  $execucao= mysql_query($conn, $query);
  $resultado= mysql_fetch_assoc($execucao);

  if(isset($resultado))
  {
    $_SESSION['usuarioId'= $resultado['id'];
    $_SESSION['usuarioNome']=$resultado['login'];
      header("location:dashboard.php")

  }elseif (!isset($resultado)) 
  {
    $_SESSION['usuarioId'] =$resultado['login'];
    $_SESSION['usuarioNome']=$resultado['login'];
    header("location:dashboard.php");

   }elseif (!isset($resultado)) 
   {
     $_SESSION['login'] ="Usuário não encontrado.";
     header("location:index.php");
     }
  }else {
  $_SESSION['login'] = "Usuário não encontrado";
  header("location:index.php");
}
?>
