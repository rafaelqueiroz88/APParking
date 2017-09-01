<?php
	$database = new Database();
    $db = $database->getConnection();
	$home = new HomeModel($db);
	if($_POST)
	{
		include "./Model/EstabelecimentoModel.php";
		$estabelecimentos = new Estabelecimentos($db);
		$estabelecimentos->nomeFantasia = $_POST["nome"];
		$estabelecimentos->razaoSocial = $_POST["razao_social"];
		$estabelecimentos->cnpj = $_POST["cnpj"];
		$estabelecimentos->responsavel = $_POST["representante"];
		$estabelecimentos->email = $_POST["email"];
		$estabelecimentos->ddd = $_POST["ddd"];
		$estabelecimentos->telefone = $_POST["telefone"];
		$estabelecimentos->qtdVagas = $_POST["vagas"];
		if($estabelecimentos->Cadastrar())
		{
			$estabelecimentos->AvisoSucesso();
		}
		else
		{
			$estabelecimentos->AvisoFalha();
		}
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
						<h3>cadastrar estabelecimento</h3>
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
				<form class="form-horizontal" action="./?pagina=Admin&acao=CadastroEstabelecimento" method="post">
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
								<label for="razao_social" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Razão Social</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="razao_social" name="razao_social" required/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="cnpj" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>CNPJ</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="cnpj" name="cnpj" required/>
									<small>Campo com mascara automática</small>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="representante" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Representante</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="representante" name="representante" required/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="email" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>E-mail</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="emailrepresentante" name="email" required/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group">
								<label for="contato" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Telefone</label>
								<div class="col-sm-12 col-md-3">
									<label for="ddd" class="sr-only">ddd</label>
									<input type="text" class="form-control" id="ddd" name="ddd" required/>
									<small>Campo com mascara automática</small>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6">
									<label for="telefone" class="sr-only">numero</label>
									<input type="text" class="form-control" id="telefone" name="telefone" required/>
									<small>Campo com mascara automática</small>
								</div>								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="vagas" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Vagas</label>
								<div class="col-sm-8 col-md-9">
									<input type="number" class="form-control" id="vagas" name="vagas" value="1" required/>
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
