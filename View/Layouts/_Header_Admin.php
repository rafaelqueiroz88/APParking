<?php
	$database = new Database();
	$db = $database->getConnection();
	$home = new HomeModel($db);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title> <?php $home->VerTituloSite(); ?> </title>
		<link rel="stylesheet" type="text/css" href="./Public/css/style_admin.css">
		<link rel="stylesheet" type="text/css" href="./Public/css/bootstrap.min.css">
	</head>
	<body>
		<main>
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="./?pagina=Admin">APParking</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
							<li><a href="#">Link</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="./?pagina=Admin&acao=CadastroEstabelecimento">Estabelecimento</a></li>
									<li><a href="./?pagina=Admin&acao=CadastroEstado">Estado</a></li>
									<li><a href="./?pagina=Admin&acao=CadastroCidade">Cidade</a></li>
									<!--<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">One more separated link</a></li>-->
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="./?pagina=Admin&acao=CadastroEstabelecimento">Estabelecimento</a></li>
								<li><a href="./?pagina=Admin&acao=CadastroEstado">Estado</a></li>
								<li><a href="./?pagina=Admin&acao=CadastroCidade">Cidade</a></li>
								<!--<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>-->
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			