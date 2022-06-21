<?php

include('bdCarrinho.php');
session_start();

$idProduto = $_GET['id'];


 $idPedido = idPedido($_SESSION['dadosUsuario']['cli_id']);
 inserirProduto($idProduto, $idPedido);

 valorTotalSoma($idProduto, $idPedido);

 header('Location: /projeto de web 2.2/carrinho.php');