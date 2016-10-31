<?php 
include 'core/session.php';
include ("include/menu.php");
if(isset($_GET['padm']))
    {   
    $padm = $_GET['padm'].".php";
      if(is_file("conteudo/$padm")){
        include("conteudo/$padm");
        }else{
        include("conteudo/404.php");
    }
    }  else {
echo '<h1>Olá '.$_SESSION['nome'].' '.$_SESSION['sobrenome'].'!</h1>';
}


?>
