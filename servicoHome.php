<?php

produtosHome();

function produtosHome()
{
    include('bdProdutos.php');

    session_start();


    $_SESSION['produtos'] = buscarProdutosHome();
    
    header('Location: index.php');

}
