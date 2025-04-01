<?php require_once  'cabecalho.php';?>
<form action="livros2.php"method="GET">
	<h1> Comparação de livros</h1>
	<p>Digite o autor do 1&ordm;:</p>
	<p><input type="texo" name="autor1"Size="50"
		maxlength="70"
		pattern="[a-za-Z\sçÇaÂ eÊ]{2,70}"
		required></p>
		<p>Digite o titulo do 1&ordm;:</p>
	<p><input type="texo" name="titulo1"Size="70"
		maxlength="100"
		pattern="[a-za-Z\sçÇaÂ eÊ]{2,100}"
		required>
		<p>Didite o n&ordm; de paginas do 1&ordm;:</p>
		<p><input type="number" name="pagina2"
           step="1"required></p>
		<p><input type="submit" name="botao"
			value="verificar"></p>
			<h1> Comparação de livros</h1>
	<p>Digite o autor do 2&ordm;:</p>
	<p><input type="texo" name="autor2"Size="50"
		maxlength="70"
		pattern="[a-za-Z\sçÇaÂ eÊ]{2,70}"
		required></p>
		<p>Digite o titulo do 1&ordm;:</p>
	<p><input type="texo" name="titulo2"Size="70"
		maxlength="100"
		pattern="[a-za-Z\sçÇaÂ eÊ]{2,100}"
		required>
		<p>Didite o n&ordm; de paginas do 2&ordm;:</p>
		<p><input type="number" name="pagina2"
           step="2"required></p>
		<p><input type="submit" name="botao"
			value="verificar"></p>
		</form>
	</body>
	</html>
	

