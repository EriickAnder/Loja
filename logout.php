<?php

include("logica_usuario.php");

function deslogar(){
    session_destroy();
    header("Location:index.php");
    die();
    
}

deslogar();