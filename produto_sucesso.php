<?php 
include("cabecalho.php");
include("conectaBanco.php");
include("banco-produto.php");
include("class/Produto.php");

$produto = new Produto();

    
 

$produto-> nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
    $usado = true;
}else{
    $usado = 'false';    
}


insereProduto($conexao,$produto);

?>
        
        Produto <?= $produto->nome ?>, <?= $produto->preco ?> cadastrado com sucesso.
        
<?php 
include("rodape.php");
?>