<?php
	class Estabelecimentos
	{
		private $conn;
		private $tbl_estabelecimentos = "prk_estabelecimentos";
		public $estabelecimentoID;
		public $razaoSocial;
		public $nomeFantasia;
		public $cnpj;
		public $responsavel;
		public $email;
		public $ddd;
		public $telefone;
		public $qtdVagas;
		public $entrada;
		public function __construct($db)
        {
            $this->conn = $db;
        }
        public function ListarEstabelecimentos()
        {
        	$query = "SELECT * FROM ".$this->tbl_estabelecimentos;
        	$stmt = $this->conn->prepare($query);
        	$stmt->execute();
        	$num = $stmt->rowCount();
        	if($num > 0)
        	{
        		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        		{
        			extract($row);
        			echo "<tr>";
	        		echo "<td>".$row["est_nome"]."</td>";
	        		echo "<td>".$row["est_razao_social"]."</td>";
	        		echo "</tr>";
        		}
        	}
        	else
        	{
        		echo "<tr>";
        		echo "<td>Nenhum estabelecimento cadastrado até o momento!</td>";
        		echo "</tr>";
        	}
		}
		public function BuscarEstabelecimentoCNPJ($cnpj)
		{
			$query = "SELECT * FROM ".$this->tbl_estabelecimentos." WHERE est_cnpj = '$cnpj'";
        	$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->estabelecimentoID = $row["est_id"];
			echo $this->estabelecimentoID;
		}
		public function Cadastrar()
		{
			$query = "INSERT INTO ".$this->tbl_estabelecimentos." 
			(est_nome, est_razao_social, est_cnpj, est_responsavel, est_email, est_ddd, est_telefone, est_quantidade_vagas, est_data_entrada)
			 VALUES
			(?, ?, ?, ?, ?, ?, ?, ?, now())";
			$stmt = $this->conn->prepare($query);
			$this->nomeFantasia = htmlspecialchars(strip_tags($this->nomeFantasia));
			$this->razaoSocial = htmlspecialchars(strip_tags($this->razaoSocial));
			$this->cnpj = htmlspecialchars(strip_tags($this->cnpj));
			$this->responsavel = htmlspecialchars(strip_tags($this->responsavel));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->ddd = htmlspecialchars(strip_tags($this->ddd));
			$this->telefone = htmlspecialchars(strip_tags($this->telefone));
			$this->qtdVagas = htmlspecialchars(strip_tags($this->qtdVagas));
			$stmt->bindParam(1, $this->nomeFantasia);
			$stmt->bindParam(2, $this->razaoSocial);
			$stmt->bindParam(3, $this->cnpj);
			$stmt->bindParam(4, $this->responsavel);
			$stmt->bindParam(5, $this->email);
			$stmt->bindParam(6, $this->ddd);
			$stmt->bindParam(7, $this->telefone);
			$stmt->bindParam(8, $this->qtdVagas);
			if($stmt->execute())
			{
				$_SESSION["cnpj"] = $this->cnpj;
				return true;
			}
			else
			{
				return false;
			}
		}
		public function AvisoSucesso()
		{
			echo "<div class='alert alert-success' id='aviso_sucesso'>";
			echo "<p align='center'>";
			echo "Estabelecimento cadastrado com sucesso!";
			echo "</p>";
			echo "<p align='center'>";
			echo "<button type='button' class='btn btn-success' id='btn_novo'>";
			echo "<span class='glyphicon glyphicon-map-marker'></span> Cadastrar endereço";
			echo "</button>";
			echo "</p>";
			echo "</div>";
		}
		public function AvisoFalha()
		{
			echo "<div class='alert alert-danger' id='aviso_falha' data-dismiss='alert' aria-label='Close'>";
			echo "</div>";
		}
	}
	class Estados
	{
		private $conn;
		private $tbl_estados = "prk_estados";
		public function __construct($db)
        {
            $this->conn = $db;
        }
		public function ListarEstadosSelect()
		{
			$query = "SELECT * FROM ".$this->tbl_estados;
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$num = $stmt->rowCount();
			if($num > 0)
			{
				echo "<option selected disabled>Escolha um Estado</option>";
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract ($row);
					echo "<option value='".$row["etd_id"]."'>".$row["etd_descricao"]."</option>";
				}
			}
		}
	}
	class Cidades
	{
		private $conn;
		private $tbl_cidades = "prk_cidades";
		public $nome;
		public $estadoID;
		public function __construct($db)
        {
            $this->conn = $db;
        }
		public function ListarCidadesSelect()
		{
			$query = "SELECT * FROM ".$this->tbl_cidades;
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$num = $stmt->rowCount();
			if($num > 0)
			{
				echo "<option selected disabled>Escolha uma Cidade</option>";
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract ($row);
					echo "<option value='".$row["cid_id"]."'>".$row["cid_descricao"]."</option>";
				}
			}
		}
		public function CadastrarCidade()
		{
			$query = "INSERT INTO ".$this->tbl_cidades."
			 (cid_descricao, cid_etd_id)
			 VALUES 
			 (?, ?)";
			$stmt = $this->conn->prepare($query);
			$this->nome = htmlspecialchars(strip_tags($this->nome));
			$this->estadoID = htmlspecialchars(strip_tags($this->estadoID));
			$stmt->bindParam(1, $this->nome);
			$stmt->bindParam(2, $this->estadoID);
			if($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function AvisoSucesso()
		{
			echo "<div class='alert alert-success' id='aviso_sucesso'>";
			echo "<p align='center'>";
			echo "Cidade cadastrada com sucesso!";
			echo "</p>";
			echo "<p align='center'>";
			echo "<a type='button' href='./pagina=Admin' class='btn btn-success'>";
			echo "<span class='glyphicon glyphicon-home'></span> Retornar";
			echo "</a>";
			echo "</p>";
			echo "</div>";
		}
		public function AvisoFalha()
		{
			echo "<div class='alert alert-danger' id='aviso_falha' data-dismiss='alert' aria-label='Close'>";
			echo "</div>";
		}		
	}
	class Localizacoes
	{
		private $conn;
		private $tbl_localizacao = "prk_localizacao";
		public $localizacaoID;
		public $estadoID;
		public $cidadeID;
		public $endereco;
		public $cep;
		public $bairro;
		public $estabelecimentoID;
		public $clienteID;
		public function __construct($db)
		{
			$this->conn = $db;
		}
		public function Cadastrar()
		{
			$query = "INSERT INTO ".$this->tbl_localizacao." 
			(loc_endereco, loc_cep, loc_bairro, loc_etd_id, loc_cid_id, loc_estabelecimento_id)
			 VALUES 
			(?, ?, ?, ?, ?, ?)";
			$stmt = $this->conn->prepare($query);
			$this->endereco = htmlspecialchars(strip_tags($this->endereco));
			$this->cep= htmlspecialchars(strip_tags($this->cep));
			$this->bairro = htmlspecialchars(strip_tags($this->bairro));
			$this->estadoID = htmlspecialchars(strip_tags($this->estadoID));
			$this->cidadeID = htmlspecialchars(strip_tags($this->cidadeID));
			$this->estabelecimentoID = htmlspecialchars(strip_tags($this->estabelecimentoID));
			$stmt->bindParam(1, $this->endereco);
			$stmt->bindParam(2, $this->cep);
			$stmt->bindParam(3, $this->bairro);
			$stmt->bindParam(4, $this->estadoID);
			$stmt->bindParam(5, $this->cidadeID);
			$stmt->bindParam(6, $this->estabelecimentoID);
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
		public function AvisoSucesso()
		{
			echo "<div class='alert alert-success' id='aviso_sucesso'>";
			echo "<p align='center'>";
			echo "Estabelecimento cadastrado com sucesso!";
			echo "</p>";
			echo "<p align='center'>";
			echo "<button type='button' class='btn btn-success' id='btn_retornar'>";
			echo "<span class='glyphicon glyphicon-home'></span> Retornar";
			echo "</button>";
			echo "</p>";
			echo "</div>";
		}
		public function AvisoFalha()
		{
			echo "<div class='alert alert-danger' id='aviso_falha' data-dismiss='alert' aria-label='Close'>";
			echo "</div>";
		}
	}