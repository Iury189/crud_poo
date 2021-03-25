<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Listar alunos </title>
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
        <li> <a href="/crud/formulario/form_atualizar.php/#atualizar"> Atualizar </a> </li>
        <li> <a href="/crud/formulario/form_excluir.php/#excluir"> Excluir </a> </li>
    </nav>
    <br>
	<fieldset> 
		<legend> Listar alunos </legend>
		<p> Procurar aluno: <input id="aluno"/> </p>
		<table id="lista" border="1">
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
                echo '<td>'."<a href='/crud/formulario/form_inserir.php/#inserir'>INSERT</a> ".
                "<a href='/crud/formulario/form_atualizar.php/#atualizar'>UPDATE</a> ".
                "<a href='/crud/formulario/form_excluir.php/#excluir'>DELETE</a>".'</td>';
                echo '</tr>'; echo '</p>';
            }
        ?>
    </table>
    <script type="text/javascript" src="/crud/js/select_aluno.js"></script>  
	</fieldset>
</body>
</html>