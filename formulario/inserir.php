<!DOCTYPE html>
<html>
<head>
	<title> INSERT | POO </title>
</head>
<body>
	<?php
		require_once "../dao/alunoDAO.php";

		$aluno = new CrudAluno();

        if (isset($_POST['Cadastrar'])) {
                        
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            
            $aluno->setNome($nome);
            $aluno->setEndereco($endereco);
                        
        	if ($aluno->Insert()) {
            	header('Location: ../formulario/form_listar.php');
            	die();
            } else {
            	echo "Erro.";
            	echo '<p><a href="../formulario/form_insert.php"><button>Refazer operação</button></a></p>';
            	die();
            }
            
        } else {
            echo "Erro, refaça a operação";
            echo '<p><a href="../formulario/form_insert.php"><button>Refazer operação</button></a></p>';
            die();
        }
	?>
</body>
</html>