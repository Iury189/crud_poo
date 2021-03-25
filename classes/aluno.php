<?php  

	require_once '../conexao/conexao.php';

	abstract class Aluno extends BD {
		
		protected $tabela;
		private $cd_aluno, $nome, $endereco;

		public function getAluno() {
			return $this->cd_aluno;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getEndereco() {
			return $this->endereco;
		}

		public function setAluno($cd_aluno) {
			$this->cd_aluno = $cd_aluno;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}
		
		public function setEndereco($endereco) {
			$this->endereco = $endereco;
		}
	}
?>