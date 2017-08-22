<?php
	class Estabelecimentos
	{
		private $conn;
		private $tbl_estabelecimentos = "prk_estabelecimentos";
        public $estabelecimentoID;
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
	}