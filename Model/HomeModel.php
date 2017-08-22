<?php
	class HomeModel
	{
		//Inserir objetos aqui
		public function VerTituloSite()
		{
			echo "APParking";
		}
		public function VerSlogan()
		{
			echo "A sua solução esta estacionada aqui";
		}
		public function VerData()
		{
			echo date('Y');
		}
	}