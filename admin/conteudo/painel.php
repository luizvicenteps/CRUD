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
//echo '<h1>Olá '.$_SESSION['nome'].' '.$_SESSION['sobrenome'].'!</h1>';
//echo "<a href='index.php?p=painel&padm=editar&usuario=".$_SESSION['codigo']."'><h4>Alterar Dados</h4></a>";
//echo "<a href='index.php?p=painel&padm=editar_senha&usuario=".$_SESSION['codigo']."'><h4>Alterar Senha</h4></a>";
?>
                                   
<div class="container">
	<div class="row">
		<h2>Início</h2>
	</div>
    
    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-danger">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
					Danger : <label class="label label-danger">323</label>
					</h3>
					<p>
						 Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-th"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 success : <label class="label label-success"> 323</label>
					</h3>
					<p>
						Ortalama Oranı :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-user"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 primary : <label class="label label-primary"> 323</label>
					</h3>
					<p>
						Ortalama Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-home"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						İnfo : <label class="label label-info"> 323</label>
					</h3>
					<p>
						Kullanma Oranı:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
        </div>
</div>
<?php
}


?>
