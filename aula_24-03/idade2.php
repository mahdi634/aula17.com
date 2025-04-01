<?php require_once 'cabecalho.php';?>
<section class="conteudo">
<?php
   // $nascimento=$_GET['nascimento'];
   // $idade=date('Y')-$nascimento;
   $dianasci=$_GET['dianasci'];
   $dianasci=new DateTime($dianasci);
   $hoje =date ('Y-m-d');
   $hoje =new DateTime($hoje);
   $idade=$hoje->diff($dianasci)->y;
    echo "<p> Voce tem $idade anos</p>";
    echo "<p><a href='idade.php' class='link'>NOVO calculo?</a></p>";



?>
</section>
</body>
</html>