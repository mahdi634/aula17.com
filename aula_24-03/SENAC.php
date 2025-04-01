<?php require_once 'cabecalho.php';?>
<form action="SENAC2.php"method="GET">
<h1>comparativo de Instituicoes de Ensino</h1>
<p> Digite a instuicao de Ensino:</p>
<p><input type="text" name="instituicao" size="50"
	maxlenth="100"
	pattern="[a-zA-ZçÇãÃéÉêÊ\s]{3,100}"
	required></p>
	<P><input type="submit" name="botao" value="Enviar">
	</P>
</form>
</body>
</html>

