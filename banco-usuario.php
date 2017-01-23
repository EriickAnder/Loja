<?php
include("conectaBanco.php");



function loginUsuario($conexao, $email, $senha){
    $senhaMD5 = md5($senha);
    $query = "SELECT * from usuario WHERE id='{$email}' AND senha = '{$senhaMD5}'";
    $resultado = mysqli_query($conexao, $query);
    $retorno = mysqli_fetch_assoc($resultado);
    return $retorno;
    
    
    
}


