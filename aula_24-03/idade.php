<?php require_once'cabecalho.php';?>
<form action="idade2.php"method="GET">
	<h1>cauculo da Idade</h1>
	<!--
	<p>Digite o ano de nacimento:</p>
	<p><input type="number" name="nascimento"step="1" min="1930"max="<?= date('Y') ?>" required></p>
     <p>   <input type="submit"name ="botao"value= "caulcular"></p>-->
     <p> Digite a data de nascimento:</p>
     <P><input type="date" name ="dianasci"min ="1930-01-01" max="<?=date ('Y-m-d')?>"required></p>
     <p><input type="submit" name ="botao" value ="calcular"></p>
     </form>
</body>
</html>