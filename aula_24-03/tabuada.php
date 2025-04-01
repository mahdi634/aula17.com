<?php require_once 'cabecalho.php';?>
<form action="tabuada.php"method="GET">
	<h1>tabuada</h1>
	<p>Digite um número</p>
	<p><input type="number"name="numero"step="1" required></p>
	<p><input type="submit" name="botao"
		value="caucular"></p>
	</form>
	<?php

	if (isset($_GET['botao'])){
		echo "<section class='conteudo'>";
		$numero=$_GET['numero'];
	
		
		for ($contador=1; $contador<=10 ;$contador++) { 
			$resultado=$numero*$contador;
			echo "<p>$numero x $contador=$resultado</p>";
		}
		    echo "</section>";
	}
	?>
    </body>
    </html>

