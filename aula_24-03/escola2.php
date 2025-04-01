<?php require_once 'cabecalho.php';?>
<section class="conteudo">
	<?php
		$nome=$_POST['nome'];
		$datanasci=$_POST['datanasci'];
		$datanasci=new DateTime($datanasci);
		$hoje=date('Y-m-d');
		$hoje=new DateTime($hoje);
		$idade=$hoje->diff($datanasci)->y;
		if ($idade<6){
			echo"<p> infelizmente,para esta idade nao temos aula!</p>";
		}else if($idade>=6&&$idade<=11){
			echo"<p>$nome voce esta na turma peixinho!</p>";
			echo"<img src='img/R.jpg'
			class='peixes'alt='peixinho'>";
		}else if($idade>=12&&$idade<=14){
			echo"<p>$nome voce esta na turma peixinho!</p>";
			echo"<img src='img/R.jpg'
			class='peixes'alt='peixinho'>";
		}

		?>
	</section>
</body>
</html>
