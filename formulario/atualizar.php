<!DOCTYPE html>
<html>
<head>
	<title> UPDATE | POO </title>
</head>
<body>
	<?php
		require_once "../dao/alunoDAO.php";

		$aluno = new AlunoDAO();

        if (isset($_POST['Atualizar'])) {
            
            $cd_aluno = $_POST['cd_aluno'];           
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            if ( (!is_numeric($cd_aluno)) ) {
                header('Location: ../formulario/form_atualizar.php');
                die();
            }

            $aluno->setAluno($cd_aluno);            
            $aluno->setNome($nome);
            $aluno->setEndereco($endereco);
                        
            if ($aluno->Update()) {
            	header('Location: ../formulario/form_listar.php');
            	die();
            } else {
            	echo "Erro.";
            	echo '<p><a href="../formulario/form_atualizar.php"><button>Refazer operação</button></a></p>';
            	die();
            }
            
        } else {
            echo "Erro, refaça a operação";
            echo '<p><a href="../formulario/form_atualizar.php"><button>Refazer operação</button></a></p>';
            die();
        }
	?>
</body>
</html>