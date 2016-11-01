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
echo "<a href='index.php?p=painel&padm=editar&usuario=".$_SESSION['codigo']."'><h4>Alterar Dados</h4></a>";
echo "<a href='index.php?p=painel&padm=editar_senha&usuario=".$_SESSION['codigo']."'><h4>Alterar Senha</h4></a>";

}


?>
