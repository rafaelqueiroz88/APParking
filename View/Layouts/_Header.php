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
					<a href="#!" class="brand-logo"> <?php $home->VerTituloSite(); ?> </a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">Javascript</a></li>
						<li><a href="mobile.html">Mobile</a></li>
					</ul>
						<ul class="side-nav" id="mobile-demo">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">Javascript</a></li>
						<li><a href="mobile.html">Mobile</a></li>
					</ul>
				</div>
			</div>				
		</nav>
		<main>
			