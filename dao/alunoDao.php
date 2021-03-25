<?php
  
	require_once '../classes/aluno.php';

	class AlunoDAO extends Aluno {

		protected $tabela = 'aluno'; 
		
		public function Insert() {
			$sql = "INSERT INTO $this->tabela (nome, endereco) VALUES (:nome, :endereco)";
			$stm = BD::prepare($sql);
			$stm->bindValue(':nome', $this->getNome());
			$stm->bindValue(':endereco', $this->getEndereco());
			return $stm->execute();
		}

		public function Select() {
			$sql = "SELECT * FROM $this->tabela";
			$stm = BD::prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);
		}

		public function Update() {
			$sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE cd_aluno = :cd_aluno";
			$stm = BD::prepare($sql);
			$stm->bindValue(':cd_aluno', $this->getAluno(), PDO::PARAM_INT);
			$stm->bindValue(':nome', $this->getNome());
			$stm->bindValue(':endereco', $this->getEndereco());
			return $stm->execute();
		}
	
		public function Delete() {
			$sql = "DELETE FROM $this->tabela WHERE cd_aluno = :cd_aluno";
			$stm = BD::prepare($sql);
			$stm->bindValue(':cd_aluno', $this->getAluno(), PDO::PARAM_INT);
			return $stm->execute();
		}
	}
?>