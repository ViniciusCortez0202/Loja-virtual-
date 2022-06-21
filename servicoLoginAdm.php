<?php

session_start();
include('bdLogin.php');


$nome = $_POST['usuario'];
$senha =  md5($_POST['senha']);


$res = logar_adm($nome, $senha);
    
if ($res) {
    $_SESSION['dadosUsuario'] = $res;
    print_r($_SESSION['dadosUsuario']);
    header('Location:index.php');
}
   //header("Location: loginAdm.php");
