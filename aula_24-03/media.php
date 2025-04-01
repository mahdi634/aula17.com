<?php require_once 'cabecalho.php';?>
<form action="media.php"method="GET">
	<h1>media</h1>
	<p>Digite o inicio:</p>
	<p><input type="number"name="inicio"step="1" required></p>
	<p>Digite o fim:</p>
	<p><input type="number"name="fim"step="1" required></p>
	<p><input type="submit" name="botao"
		value="conte"></p>
	</form>
	<?php 
	if (isset($_GET['botao'])){
        $inicio=$_GET['inicio'];
		$fim=$_GET['fim'];
		$soma=0;
		$elementos=0;
		echo "<section class='conteudo'>";
		if ($inicio<$fim){
			for ($contador=$inicio; $contador<=$fim;$contador++){
			$soma=$soma+$contador;
			$elementos++;
			}
		}else if($inicio>$fim){
			for( $contador=$fim;$contador<=$inicio;$contador++){
				$soma=$soma+$contador;
				$elementos++;
			}
		}
		$media=$soma/$elementos;
		echo "<p>media é $media</p>";
echo "</section>";
}

?>
</body>
</html>

