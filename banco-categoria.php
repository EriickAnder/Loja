<?php 
include("conectaBanco.php");

function listaCategorias($conexao){
 $array_categoria = array();
 $query = "select * from categoria";
 $conecta = mysqli_query($conexao, $query);

while($resultado = mysqli_fetch_assoc($conecta)){
    
    array_push($array_categoria, $resultado);
 
}

return $array_categoria;
}



    