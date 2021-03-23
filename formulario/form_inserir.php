<!DOCTYPE html>
<html>
<head>
	<title> Cadastrar aluno </title>
</head>
<body>
	<nav>
		<li> <a href="/crud/index.php"> Início </a> </li>
		<li> <a href="/crud/formulario/form_listar.php"> Listar </a> </li>
		<li> <a href="/crud/formulario/form_atualizar.php"> Atualizar </a> </li>
		<li> <a href="/crud/formulario/form_excluir.php"> Excluir </a> </li>
	</nav>
	<fieldset>
		<legend> Cadastrar aluno </legend>
			<form method="POST" autocomplete="off" action="../formulario/inserir.php">
				<p> Nome: <input type="text" name="nome" size=30 required=""> </p>
				<p> Endereço: <input type="text" name="endereco" size=30 required=""> </p>
				<button name="Cadastrar"> Cadastrar </button>
			</form>
	</fieldset>
	<br>
</body>
</html>