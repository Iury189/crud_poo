<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Cadastrar aluno </title>
</head>
<body>
	<nav>
		<li> <a href="/crud/index.php" title="Início"> Início </a> </li>
		<li> <a href="/crud/formulario/form_listar.php/#aluno" title="Listar"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_atualizar.php/#atualizar" title="Atualizar"> Atualizar </a> </li>
		<li> <a href="/crud/formulario/form_excluir.php/#excluir" title="Excluir"> Excluir </a> </li>
	</nav>
	<br>
	<fieldset>
		<legend> Cadastrar aluno </legend>
			<form id="inserir" method="POST" autocomplete="off" action="/crud/formulario/inserir.php">
				<p> Nome: <input type="text" name="nome" size=30 required="" title="Campo para inserir o nome do aluno"> </p>
				<p> Endereço: <input type="text" name="endereco" size=30 required="" title="Campo para inserir o endereço do aluno"> </p>
				<button name="Cadastrar"> Cadastrar </button>
			</form>
	</fieldset>
	<br>
</body>
</html>