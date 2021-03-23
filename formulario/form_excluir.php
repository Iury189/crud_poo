<!DOCTYPE html>
<html>
<head>
	<title> Excuir aluno </title>
</head>
<body>
	<?php
		require_once "../dao/crudaluno.php";
		$aluno = new CrudAluno();

		$sql = "SELECT cd_aluno, nome FROM aluno";
        $stm = BD::prepare($sql);
        $stm->execute();
        $linhas = $stm->fetchAll(PDO::FETCH_ASSOC);
	?>
	<nav>
		<li> <a href="/crud/index.php"> Início </a> </li>
		<li> <a href="/crud/formulario/form_inserir.php"> Inserir </a> </li>
		<li> <a href="/crud/formulario/form_listar.php"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_atualizar.php"> Atualizar </a> </li>
	</nav>
	<fieldset>
		<legend> Excluir aluno </legend>
			<form method="POST" autocomplete="off" action="../formulario/excluir.php">
				<p> ID aluno:
					<select name="cd_aluno" required="">
						<option value=""> Nenhum </option>
			  			<?php foreach($linhas as $key): ?>
		    				<option value="<?= $key['cd_aluno'] ?>"><?= $key['nome'] ?></option>
						<?php endforeach ?>
					</select>
				</p>
				<button name="Excluir"> Excluir </button>
			</form>
	    </form>
	</fieldset>
</body>
</html>