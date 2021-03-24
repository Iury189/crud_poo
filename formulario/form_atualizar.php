<!DOCTYPE html>
<html>
<head>
	<title> Atualizar aluno </title>
	<script type="text/javascript" src="/crud/json/requisicao_aluno.js"></script>
</head>
<body>
	<?php
		require_once "../dao/crudaluno.php";
		$aluno = new CrudAluno();

		$sql = "SELECT cd_aluno, nome FROM aluno";
        $stm = BD::prepare($sql);
        $stm->execute();
        $linhas = $stm->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_GET['cd_aluno'])) {
        	$aluno = $_GET['cd_aluno'];
        }
	?>
	<nav>
		<li> <a href="/crud/index.php"> Início </a> </li>
		<li> <a href="/crud/formulario/form_inserir.php"> Inserir </a> </li>
		<li> <a href="/crud/formulario/form_listar.php"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_excluir.php"> Excluir </a> </li>
	</nav>
	<br>
	<fieldset>
		<legend> Atualizar aluno </legend>
			<form method="POST" autocomplete="off" action="../formulario/atualizar.php">
		        <p> ID aluno:
		            <select name="cd_aluno" onclick="buscaDados()" id="cd_aluno" required="">
		                <option value=""> Nenhum </option>
		                <?php foreach($linhas as $key): ?>
		                    <option value="<?= $key['cd_aluno'] ?>"><?= $key['nome'] ?></option>
		                <?php endforeach ?>
		            </select>
		        </p>
				<p> Nome: <input type="text" name="nome" id="nome" size=30 required=""> </p>
				<p> Endereço: <input type="text" name="endereco" id="endereco" size=30 required=""> </p>
				<button name="Atualizar"> Atualizar </button>
			</form>
	</fieldset>
</body>
</html>