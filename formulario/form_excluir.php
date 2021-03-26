<!DOCTYPE html>
<html>
<head>
	<title> Excluir aluno </title>
</head>
<body>
	<?php
		require_once "../dao/alunoDAO.php";
		$aluno = new AlunoDAO();

		$sql = "SELECT cd_aluno, nome FROM aluno ORDER BY cd_aluno";
        $stm = BD::prepare($sql);
        $stm->execute();
        $linhas = $stm->fetchAll(PDO::FETCH_ASSOC);
	?>
	<nav>
		<li> <a href="/crud/index.php" title="Início"> Início </a> </li>
		<li> <a href="/crud/formulario/form_inserir.php/#inserir" title="Inserir"> Inserir </a> </li>
		<li> <a href="/crud/formulario/form_listar.php/#aluno" title="Listar"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_atualizar.php/#atualizar" title="Atualizar"> Atualizar </a> </li>
	</nav>
	<br>
	<fieldset>
		<legend> Excluir aluno </legend>
			<form method="POST" id="excluir" autocomplete="off" action="/crud/formulario/excluir.php" title="Caixa de seleção para escolher o aluno a ser excluído">
				<p> ID aluno:
					<select name="cd_aluno" required="">
						<option value=""> Nenhum </option>
			  			<?php foreach($linhas as $key): ?>
		    				<option value="<?= $key['cd_aluno'] ?>" title="<?= $key['nome'] ?>"><?= $key['nome'] ?></option>
						<?php endforeach ?>
					</select>
				</p>
				<button name="Excluir"> Excluir </button>
			</form>
	    </form>
	</fieldset>
	<table border="1">
        <tr> 
        	<th> ID </th>
            <th> Nome </th>
            <th> Endereço </th>
            <th> Ações </th>
        </tr>
        <?php 
            foreach ($aluno->Select() as $valor){
                echo '<tr>';
                echo '<td>'.$valor['cd_aluno'].'</td>';
                echo '<td>'.$valor['nome'].'</td>';
                echo '<td>'.$valor['endereco'].'</td>';
                echo '<td>'."<a href='/crud/formulario/form_atualizar.php/#atualizar' title='Atualizar'>Atualizar</a> ".'</td>';
                echo '</tr>'; echo '</p>';
            }
        ?>
    </table>
</body>
</html>