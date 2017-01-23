<?php  include("cabecalho.php"); 
include("conectaBanco.php"); 
include("banco-produto.php");
$id = $_POST['id'];

removeProduto($conexao,$id);

?>



<?php  include("rodape.php"); ?>