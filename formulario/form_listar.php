<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Listar alunos </title>
</head>
<body>
    <?php
        require_once "../dao/alunoDAO.php";
		$aluno = new AlunoDAO();
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
		<p> Procurar nome do aluno: <input id="aluno"/> </p>
		<table id="lista" border="1">
        <tr> 
        	<th> ID </th>
            <th> Nome </th>
            <th> Endereço </th>
            <th> Ações </th>
        </tr>
        <?php 
            foreach ($aluno->Select() as $valor){
                echo '<tr>';
                echo '<td>'.$valor->getAluno().'</td>';
                echo '<td>'.$valor->getNome().'</td>';
                echo '<td>'.$valor->getEndereco().'</td>';
                echo '<td>'."<a href='/crud/formulario/form_atualizar.php/#atualizar'>Atualizar</a> ".
                "<a href='/crud/formulario/form_excluir.php/#excluir'>Excluir</a>".'</td>';
                echo '</tr>'; echo '</p>';
            }
        ?>
    </table>
    <script type="text/javascript" src="/crud/js/select_aluno.js"></script>  
	</fieldset>
</body>
</html>