<?php 
include("cabecalho.php");
include("conectaBanco.php");
include("banco-produto.php");
?>
    <?php
 

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
    $usado = true;
}else{
    $usado = 'false';    
}


insereProduto($conexao, $nome, $preco, $categoria_id,$usado, $descricao);

?>
        
        Produto <?= $nome ?>, <?= $preco ?> cadastrado com sucesso.
        
<?php 
include("rodape.php");
?>