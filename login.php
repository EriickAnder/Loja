<?php 
include("conectaBanco.php");
include("banco-usuario.php");
include("logica_usuario.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = loginUsuario($conexao,$email,$senha );


if($usuario == null){
    $_SESSION["danger"] = "Usuario ou Senha invalidos";
    header("Location:index.php");
    
}else{
     logaUsuario($email);
   
         $_SESSION["success"] = "Login feito com sucesso";

    header("Location:index.php");
    
}


