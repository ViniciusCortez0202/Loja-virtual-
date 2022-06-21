<?php

session_start();

if (isset($_SESSION['dadosUsuario'])){
    if(isset($_SESSION['dadosUsuario']['cli_id'])){
        header("Location: perfil.php");
    } else {
        header("Location: administrador.php");
    }
}
else header("Location: registrar.php");
