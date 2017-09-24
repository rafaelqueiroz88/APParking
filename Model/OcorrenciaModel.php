<?php
    class OcorrenciaModel
    {
        private $conn;
		private $tbl_ocorrencias = "prk_ocorrencias";
		public $estabelecimentoID;
		public $nome;
        public $tipoSolicitacao;
        public $tipoOcorrencia;
        public $descricao;
        public $nivelUrgencia;
        public $dataEntrada;

		public function __construct($db)
        {
            $this->conn = $db;
        }

        public function CadastrarOcorrencia()
        {
            $query = "INSERT INTO ".$this->tbl_ocorrencias." 
            (oco_solicitante_id, oco_tipo_solicitacao, oco_tipo_ocorrencia, oco_descricao, oco_urgencia, oco_data_entrada) 
            VALUES 
            (?, ?, ?, ?, ?, now())";
            $stmt = $this->conn->prepare($query);
            $this->estabelecimentoID = htmlspecialchars(strip_tags($this->estabelecimentoID));
            $this->tipoSolicitacao = htmlspecialchars(strip_tags($this->tipoSolicitacao));
            $this->tipoOcorrencia = htmlspecialchars(strip_tags($this->tipoOcorrencia));
            $this->descricao = htmlspecialchars(strip_tags($this->descricao));
            $this->nivelUrgencia = htmlspecialchars(strip_tags($this->nivelUrgencia));
            $stmt->bindParam(1, $this->estabelecimentoID);
            $stmt->bindParam(2, $this->tipoSolicitacao);
            $stmt->bindParam(3, $this->tipoOcorrencia);
            $stmt->bindParam(4, $this->descricao);
            $stmt->bindParam(5, $this->nivelUrgencia);
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
			echo "Ocorrência cadastrada com sucesso!";
			echo "</p>";
			echo "<p align='center'>";
			echo "<button type='button' class='btn btn-success' id='btn_retorno'>";
			echo "retornar a tela principal";
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