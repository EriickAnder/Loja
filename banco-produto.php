<?php 


function listaProduto($conexao){

    $arrayProduto = array(); // para compatibilidade 
    $query = "select p.*, c.categoria as categoria_nome from produtos as p join categoria as c on c.id = p.categoria_id";
    $resultado = mysqli_query($conexao, $query);

    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($arrayProduto, $produto);
}
    return $arrayProduto;
}



function insereProduto($conexao, Produto $produto){

$query = "insert into produtos (nome, preco, categoria_id, usado, descricao) values ('{$produto->nome}', {$produto->preco}, {$produto->categoria_id},' {$produto->usado}' ,'{$produto->descricao}')";

return mysqli_query($conexao, $query);
    
}     


function editaProduto($conexao, $nome, $preco, $categoria_id, $usado, $descricao, $id){

$query = "update produto set nome ='{$nome}' , preco = {$preco} , categoria_id = {$categoria_id}, usado = '{$usado}', descricao = '{$descricao}' where id = {$id}";
    
    echo $query;
return mysqli_query($conexao, $query);
    
} 

function buscaProduto($conexao, $id){
    $query = "SELECT * FROM produtos WHERE id = {$id}";
   $resultado = mysqli_query($conexao, $query);
      return mysqli_fetch_assoc($resultado);
    
    
    
}


function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    header("Location: lista_produto.php");
    return  mysqli_query($conexao, $query);
    
    
}