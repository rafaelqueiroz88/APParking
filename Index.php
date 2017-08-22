<?php
	include "Controller/HomeController.php";
	include "Model/HomeModel.php";
	include "./Config/Database.php";
	$controller = new HomeController();
	$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "Index";
	$admin = isset($_GET["acao"]) ? $_GET["acao"] : "Index";
	if (isset ($_GET["/Admin"]))
	{
		echo "oi";
	}
	switch ($pagina) {
		case 'Index':
			$controller->Header();
			$controller->Index();
			$controller->Footer();
			break;
		case 'Admin':
			$controller->HeaderAdmin();
			$controller->IndexAdmin($admin);
			$controller->FooterAdmin();
			break;
	}