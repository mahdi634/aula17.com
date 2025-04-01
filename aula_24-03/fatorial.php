<?php require_once 'cabecalho.php';?>
<form action="fatorial.php"method="GET">
	<h1>fatorial</h1>
	<p>Digite um número</p>
	<p><input type="number"name="numero"step="1" required></p>
	<p><input type="submit" name="botao"
		value="caucular"></p>
	</form>
	<?php 

	if (isset($_GET['botao'])){
		echo "<section class='conteudo'>";
		$numero=$_GET['numero'];
        $fatorial=1; 
		for($contador=$numero;$contador>=1 ;$contador--){
			$fatorial=$fatorial*$contador;
		}
		echo"<p>$numero!=$fatorial</p>";
		
		}
	?>
</body>
</html>