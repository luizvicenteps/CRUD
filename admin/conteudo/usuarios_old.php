<?php
$sql_code = "SELECT * FROM t_users";
$sql_query = $PDO->query($sql_code);
$linha = $sql_query->fetchAll(PDO::FETCH_ASSOC);

//$s = ["0" => "Masculino", "1" => "Feminino"];
//$acs = ["0" => "Básico", "1" => "Admin"];
	$acs[0] = "Básico";
	$acs[1] = "Admin";
	$s[0] = "Masculino";
	$s[1] = "Feminino";
echo "<h1>Usuários - Conexão PDO</h1>";
?>
<div class="table table-responsive">

    <div style="margin:7px" >
        <div class="col-xs-6">
            <div class="btn-group">
                <a href="index.php?p=painel&padm=cadastrar" class="btn btn-default btn-success">Novo</a>
            </div>
        </div>
        
                    <div id="custom-search-input">
                <div class="input-group col-xs-6 pull-right form-group">
                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        
        
            <!--        <div class="col-xs-6 pull-right form-group">
            <input type="text" class="form-control" style="border-radius:0px" placeholder="Pesquisar">
            </div>-->
    </div>
    <div class="panel-body" style="padding:0px">
        <table class="table table-striped table-bordered" style="margin:0px">
            <thead>
                <tr style="font-weight:bold; text-align: left">
                    <td><strong>Nome</strong></td>
                    <td>Sobrenome</td>
                    <td>Login</td>
                    <td>Sexo</td>
                    <td>E-mail</td>
                    <td>Nível de Acesso</td>
                    <td>Data de Cadastro</td>
                    <td>Ação</td>
                    <td>Saldo</td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($linha as $l => $mostra) {
                    //extract($mostra);
                    ?>

                    <tr style="white-space: nowrap">
        <!--		<td><?php echo $mostra['nome']; ?></td>-->
                        <td><?php echo $mostra['nome']; ?></td>
                        <td><?php echo $mostra['sobrenome']; ?></td>
                        <td><?php echo $mostra['login']; ?></td>
                        <td><?php echo ($mostra['sexo'] == 1 ? $s[0] : $s[1]); ?></td>
                        <td><?php echo $mostra['email']; ?></td>
                        <td><?php echo ($mostra['niveldeacesso'] == 1 ? $acs[0] : $acs[1]); ?></td>
                        <td><?php
                            $d = explode(" ", $mostra['datadecadastro']);
                            $data = explode("-", $d[0]);
                            echo "$data[2]/$data[1]/$data[0] às $d[1]";
                            ?></td>
                        <td style="align-items:center">

                            <a href="index.php?p=painel&padm=editar&usuario=<?php echo $mostra['codigo']; ?>">
                                <button type="button" class="btn btn-xs btn-default">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </a> 
                            <span>| |</span>
                            <a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $mostra['nome']; ?>?'))
                               location.href='index.php?p=painel&padm=deletar&usuario=<?php echo $mostra['codigo']; ?>';">
                                <button type="button" data-bind="click: $parent.remove" class="remove-news btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </a>
                        </td>
                        <td><?php echo $mostra['saldo']; ?></td>

                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>