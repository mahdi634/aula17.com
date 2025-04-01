<?php require_once'cabecalho.php';?>
<section class="conteudo">
	<?php
	$preço=$_GET['preço'];
	$quantidade=$_GET['quantidade'];
	$total=$preço*$peso*$quantidade;
	$preço=number_format($preço,2,',','.');
	echo "<P>$quantidade unidades,
	a R$ $preço un , ficam total
	R$ $total</p>";
	echo"<p><a href='compra.php'class='link";
	?>

</section>
</body>
</html>
