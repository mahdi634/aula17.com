<?php require_once'cabecalho.php';?>
<form action="telacalculadora.php" method="=GET">
	<h1>Cauculadora</h1>
	<p>Digite um número :</p>
	<p><input type="number" name="numero1"required></p>
	<P>Digite outro numero</P>
	<p><input type="number" name="numero2"required></p>
	<p>Operação:</p>
	<p><input type="radio" name="Operaçâo" value="somar"required>+
		<input type="radio" name="operacao"value="subtrair" required>-
		<input type="radio" name="Operaçâo" value="multiplicar"required>x
		<input type="radio" name="operacao"value="dividir" required>&dividir;
	</p>
	<p><input type="submit" name="botao" value="caucular"></p>
</form>
<?php
if (isset($_GET['botao'])){
	require_once'model/Calculadora.php'();
	$calculadora=new Calculadora()
		$calculadora->setNumero1($_GET['numero1']);
			$calculadora->setNumero2($_GET['numero2']);
			echo "<section class='conteudo'>";
			if($_GET['operacao']=='somar'){
				echo $calculadora->somar($calculadora->getNumero1(),$calculadora->getNumero2());
			}else if($_GET['operacao']=='subtrair'){
				echo $calculadora->subtrair($calculadora->getNumero1(),$calculadora->getNumero2());
			}else if($_GET['operacao']=='mutiplicar'){
				echo $calculadora->mutiplicar($calculadora->getNumero1(),$calculadora->getNumero2());
			}else if($_GET['operacao']=='dividir'){
				echo $calculadora->dividir($calculadora->getNumero1(),$calculadora->getNumero2());
			}
			echo "</section>";

}
?>
</body>
</html>

