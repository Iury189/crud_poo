<!DOCTYPE html>
<html>
<head>
	<title> Excluir aluno </title>
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
		<li> <a href="/crud/formulario/form_inserir.php/#inserir"> Inserir </a> </li>
		<li> <a href="/crud/formulario/form_listar.php/#aluno"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_atualizar.php/#atualizar"> Atualizar </a> </li>
	</nav>
	<br>
	<fieldset>
		<legend> Excluir aluno </legend>
			<form method="POST" id="excluir" autocomplete="off" action="../formulario/excluir.php">
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
	<table border="1">
        <tr> 
        	<th> ID </th>
            <th> Nome </th>
            <th> Endereço </th>
            <th> Ações </th>
        </tr>
        <?php 
            foreach ($aluno->Select() as $key){
                echo '<tr>';
                echo '<td>'.$key->cd_aluno.'</td>';
                echo '<td>'.$key->nome.'</td>';
                echo '<td>'.$key->endereco.'</td>';
                echo '<td>'."<a href='../formulario/form_inserir.php/#inserir'>INSERT</a> ".
                "<a href='../formulario/form_atualizar.php/#atualizar'>UPDATE</a> ";
                echo '</tr>'; echo '</p>';
            }
        ?>
    </table>
</body>
</html>