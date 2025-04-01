<?php require_once 'cabecalho.php';?>
<section class="conteudo">
	<?php  
	$autor1=$_GET['autor1'];
	$titulo1=$_GET['titulo1'];
	$pagina1=$_GET['pagina1'];
	$autor2=$_GET['autor2'];
	$titulo2=$_GET['titulo2'];
	$pagina1=$_GET['pagina2'];
	if($pagina1>$pagina2){
		echo"<p>O maior é o$titulo1 do $autor1
		com $pagina1 paginas!</p>";

    }  else if($pagina2>$pagina1){
       echo "<p>o maior é o titulo2 do $autor2
       com$pagina2 pagina!</p>";
     }else{ 
     	echo "<p> os livros sâo iguais!
     	mesmo número de páginas!</p>";
     }
     ?>
     </section>
     </body>
     </html>
  
     


