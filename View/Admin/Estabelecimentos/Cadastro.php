<?php
	$database = new Database();
    $db = $database->getConnection();
	$home = new HomeModel($db);
?>
			<div class="container">
				<div class="row section">
					<div class="col-sm-12 col-md-12">
						<h2 align="center"><?php $home->VerTituloSite(); ?></h2>
					</div>
				</div>
				<div class="row section">
					<div class="col-sm-12 col-md-12">
						<h3>cadastro estabelecimento</h3>
					</div>
				</div>
			</div>
			<div class="container">
				<fieldset>
					<legend>contato</legend>
				</fieldset>
				<form class="form-horizontal">
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="nome" class="col-sm-4 col-md-3 control-label">Nome</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="nome" name="nome"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="razao_social" class="col-sm-4 col-md-3 control-label">Razão Social</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="razao_social" name="razao_social"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="cnpj" class="col-sm-4 col-md-3 control-label">CNPJ</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="cnpj" name="cnpj"/>
									<small>Campo com mascara automática</small>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="representante" class="col-sm-4 col-md-3 control-label">Representante</label>
								<div class="col-sm-8 col-md-9">
									<input type="text" class="form-control" id="representante" name="representante"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group">
								<label for="contato" class="col-sm-4 col-md-3 control-label">Contato</label>
								<div class="col-sm-12 col-md-3">
									<label for="ddd" class="sr-only">ddd</label>
									<input type="text" class="form-control" id="ddd" name="ddd"/>
									<small>Campo com mascara automática</small>
								</div>
								<div class="col-sm-12 col-md-6">
									<label for="telefone" class="sr-only">telefone</label>
									<input type="text" class="form-control" id="telefone" name="telefone"/>
									<small>Campo com mascara automática</small>
								</div>								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="vagas" class="col-sm-4 col-md-3 control-label">Vagas</label>
								<div class="col-sm-8 col-md-9">
									<input type="number" class="form-control" id="vagas" name="vagas" value="1"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-offset-3 col-md-3">
							<a href="./?pagina=Admin" class="btn btn-warning">
								<span class="glyphicon glyphicon-menu-left"></span> Cancelar
							</a>
						</div>
						<div class="col-sm-12 col-md-offset-2 col-md-3">
							<button class="btn btn-primary">
								Avançar <span class="glyphicon glyphicon-menu-right"></span>
							</button>
						</div>
					</div>
				</form>
			</div>
