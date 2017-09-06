<?php
    $database = new Database();
    $db = $database->getConnection();
    include "./Model/EstabelecimentoModel.php";
    $home = new HomeModel($db);
    $estados = new Estados($db);
    if($_POST)
    {
        $cidades = new Cidades($db);
        $cidades->nome = $_POST["nome"];
        $cidades->estadoID = $_POST["estado_id"];
        if($cidades->CadastrarCidade())
        {
            $cidades->AvisoSucesso();
        }
        else
        {
            $cidades->AvisoFalha();
        }
    }
    else
    {

    }
?>
            <div class="container">
                <div class="row section">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h2 align="center"><?php $home->VerTituloSite(); ?></h2>
                    </div>
                </div>
                <div class="row section">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h3>cadastrar cidade</h3>
                    </div>
                </div>
                <hr/>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h4>Legenda</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-1">
						<b class="obrigatoriedade">*</b>
					</div>
					<div class="col-xs-8 col-sm-5 col-md-2">
						Informação obrigatória
					</div>
				</div>
				<hr/>
                <fieldset>
					<legend>dados</legend>
				</fieldset>
                <form class="form-horizontal" action="./?pagina=Admin&acao=CadastroCidade" method="post">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="nome" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Nome</label>
                                <div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="nome" name="nome" required/>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="estado_id" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Estado</label>
								<div class="col-sm-8 col-md-9">
                                    <select class="form-control" id="estado_id" name="estado_id" required/>
                                        <?php
                                            $estados->ListarEstadosSelect();
                                        ?>
                                    </select>
								</div>
							</div>
						</div>
                    </div>
                    <hr/>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-2">
							<p>
								<a href="./?pagina=Admin" class="btn btn-warning btn-lg btn-block">
									<span class="glyphicon glyphicon-menu-left"></span> Cancelar
								</a>
							</p>							
						</div>
						<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-2">
							<p>
								<button class="btn btn-primary btn-lg btn-block">
									Avançar <span class="glyphicon glyphicon-menu-right"></span>
								</button>
							</p>							
						</div>
					</div>
                </form>
                <hr/>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h4>Legenda</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-1">
						<b class="obrigatoriedade">*</b>
					</div>
					<div class="col-xs-8 col-sm-5 col-md-2">
						Informação obrigatória
					</div>
				</div>
				<hr/>
            </div>