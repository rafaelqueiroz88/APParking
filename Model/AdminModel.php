<?php
	class AdminModel
	{
		private $conn;
		private $tbl_admin = "prk_administradores";
		public $usuarioID;
		public $nome;
		public $login;
		public $senha;

		public function __construct($db)
        {
            $this->conn = $db;
		}
		
		public function AutenticarUsuario()
		{
			$query = "SELECT * FROM ".$this->tbl_admin." WHERE adm_login = ? AND adm_senha = ?";
			$stmt = $this->conn->prepare($query);
			$this->login = htmlspecialchars(strip_tags($this->login));
			$this->senha = htmlspecialchars(strip_tags($this->senha));
			$stmt->bindParam(1, $this->login);
			$stmt->bindParam(2, $this->senha);
			$stmt->execute();
			$num = $stmt->rowCount();
			if($num > 0)
			{
				while($row = $stmt->fetch(PDO::FETCH_ASSOC))
				{
					extract($row);
					$_SESSION["id_admin"] = $row["adm_id"];
					$_SESSION["login_admin"] = $row["adm_login"];
				}
				return true;
			}
			else
			{
				return false;
			}
		}
	}
