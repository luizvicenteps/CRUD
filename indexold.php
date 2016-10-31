<?php #include 'include/header.php';
 
?>
<!DOCTYPE html>
<html>
    <head>
        <!--CSS-->
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <!-- Incluindo o CSS do Bootstrap -->
        <link href="style/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--Include Conexao BD-->
        <?php include("classe/conexao.php"); ?>
        <!--META TAGs-->
        <meta charset="UTF-8">
        <!--Titulo Pagina-->
        <title>Sistema de Cadastro</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="style/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        
        </style>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
       

    </head>
    <body>
        <!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <!-- Incluindo o JavaScript do Bootstrap -->
        <script src="style/js/bootstrap.min.js"></script>

        <div class="container-wmenu container">
   <?php 
                if(isset($_GET['r'])){
                    if(($_GET['r']=='0')){
                        
                    
                    echo '  <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="#">×</a>Usuário e/ou senha Incorreto!
                    </div>';
                    }
                    if(($_GET['r']=='1')){
                        
                    
                    echo '  <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert" href="#">×</a>Por favor, faça login!
                    </div>';
                    }
                    
                }
    
    if(isset($_GET['p'])){

      $pagina = $_GET['p'].".php";
      if(is_file("conteudo/$pagina")){
        include_once ("include/menu.php");
        include("conteudo/$pagina");
        }else
        include("conteudo/404.php");

    }else
      include("conteudo/core/flogin.php");

    ?>
</div> <!-- Fechamento Div PRINCIPAL -->

</body>
</html>

 
<?php #include 'include/footer.php';?>