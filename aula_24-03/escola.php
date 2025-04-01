<?php require_once 'cabecalho.php';?>
<form action="escola2.php"method="post">
	<h1>Escola de Natação-Swimming Brasil</h1>
	<p> Digite nome de aluno:</p>
	<p><input type="text" name=" nome"
		 size="50" maxlength="70"
		 pattern="[a-zA_Z\sçÇâÂéÉ]{2,70}"
		 required></p>
		 <p>Digite a data de nascimento:</p>
		 <p><input type="date" name="datanasci"
		 	min="1930-01=01" max="<?= date('y-m-d')?>"
		 	required></p>
		 	<p><input type="submit" name="botao"
		 		value ="Cadastrar"></p>
		 	</form>
		 </body>
		 </html>