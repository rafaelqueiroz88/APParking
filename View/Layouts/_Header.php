<?php
	$home = new HomeModel();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php $home->VerTituloSite(); ?></title>
		<link rel="stylesheet" type="text/css" href="./Public/css/style.css">
		<link rel="stylesheet" type="text/css" href="./Public/css/materialize.min.css" media="screen,projection">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-wrapper black">
				<div class="container">
					<a href="./" class="brand-logo">
						<?php $home->VerTituloSite(); ?>
						<i class="material-icons left">directions_car</i>
					</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse">
						<i class="material-icons">menu</i>
					</a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="./?pagina=SolicitarReparo">
								<i class="material-icons left">build</i>
								Solicitações
							</a>
						</li>
						<li>
							<a href="./?pagina=Configuracoes">
							<i class="material-icons left">attach_money</i>
								Tabela de Preços
							</a>
						</li>
						<li>
							<a href="./?pagina=Configuracoes">
								<i class="material-icons left">dashboard</i>
								Configurações
							</a>
						</li>
						<li>
							<a href="./?pagina=LogOff">
								<i class="material-icons left">exit_to_app</i>
								Sair
							</a>
						</li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li>
							<a href="./?pagina=SolicitarReparo">
								<i class="material-icons right">build</i>
								Solicitações
							</a>
						</li>
						<li>
							<a href="./?pagina=Configuracoes">
							<i class="material-icons right">attach_money</i>
								Tabela de Preços
							</a>
						</li>
						<li>
							<a href="./?pagina=Configuracoes">
								<i class="material-icons right">dashboard</i>
								Configurações
							</a>
						</li>
						<li>
							<a href="./?pagina=LogOff">
								<i class="material-icons right">exit_to_app</i>
								Sair
							</a>
						</li>
					</ul>
				</div>
			</div>				
		</nav>
		<main>
			