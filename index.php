<?php 
include("cabecalho.php");
include("logica_usuario.php");



mostra_msg("success");
mostra_msg("danger");   


if(usuarioEstaLogado()){
?>    

<p class="alert-success">Você está logado como: <?=usuarioLogado()?><a href="logout.php"> deslogar</a></p>
<?php
}else{

?>




<table class="table">
<form action="login.php" method="post">
<p>Bem Vindo</p>
    <h1>Login</h1>
    
    <tr>
    <td>Login:</td>
    <td><input type="text" name="email" class="form-control"></td>
    </tr>
    <tr>
        <td>Senha:</td>
    <td><input type="password" name="senha" class="form-control"></td>
    
    </tr>
    <tr>
        <td>
            <button value="Entrar" class="btn">Entrar</button>
        <input type="submit" value="Cancelar" class="btn">
        </td>
    </tr>

</form>
</table>



 <?php
    }
include("rodape.php");?>