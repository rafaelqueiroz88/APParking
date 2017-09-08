<?php
	class HomeController
	{
		public function HeaderAdmin()
		{
			include "./View/Layouts/_Header_Admin.php";
		}
		public function FooterAdmin()
		{
			include "./View/Layouts/_Footer_Admin.php";
		}
		public function IndexAdmin($direction)
		{
			switch ($direction) {
				case 'Index':
					include "./View/Admin.php";
					break;
				case 'CadastroEstabelecimento':
					include "./View/Admin/Estabelecimentos/Cadastro.php";
					break;
				case 'CadastroEndereco':
					include "./View/Admin/Estabelecimentos/CadastroEndereco.php";
					break;
				case 'CadastroCidade':
					include "./View/Admin/Cidades/Cadastro.php";
					break;
				case 'CadastroEstado':
					include "./View/Admin/Estados/Cadastro.php";
					break;
			}
			
		}
		public function Header()
		{
			include "./View/Layouts/_Header.php";
		}
		public function Footer()
		{
			include "./View/Layouts/_Footer.php";
		}
		public function Index()
		{
			include "./View/Login.php";
		}
		public function Home()
		{
			include "./View/Home.php";
		}
	}