<!DOCTYPE html>
<html>
<head>
	<title> DELETE | POO </title>
</head>
<body>
	<?php  
		require_once "../dao/alunoDAO.php";
        
		$aluno = new CrudAluno();

        if (isset($_POST['Excluir'])) {
                        
            $cd_aluno = $_POST['cd_aluno'];

            if ( (!is_numeric($cd_aluno)) ) {
                header('Location: ../formulario/form_excluir.php');
                die();
            }
                        
            $aluno->setAluno($cd_aluno);
                        
            if ($aluno->Delete()) {
            	header('Location: ../formulario/form_listar.php');
            	die();
            } else {
            	echo "Erro.";
            	echo '<p><a href="../formulario/form_excluir.php"><button>Refazer operação</button></a></p>';
            	die();
            }
            
        } else {
            echo "Erro, refaça a operação";
            echo '<p><a href="../formulario/form_excluir.php"><button>Refazer operação</button></a></p>';
            die();
        }
	?>
</body>
</html>