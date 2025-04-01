<?php require_once  'cabecalho.php';?>
<section class="conteudo">;
	<?php
	$instituicao=$_GET['instituicao'];
	//if($instituicao=="SENAC"||$instituicao=="senac"){
	if(strtolower($instituicao)=="senac"){


	echo "<p> parabens!boa Escolha!!</p>";
	}else{
		echo"<P>meh melhor fazer Senac!</p>";
	}
	echo"<p><a href='SENAC.php' class-'link'>Novo Cauculo?</a></p>";
?>
</section>
</body>
</html>