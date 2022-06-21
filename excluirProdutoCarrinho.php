<?php

$id = $_GET['id'];

include('bdCarrinho.php');
session_start();

excluirProdutoPedido($id);

valorTotalSub($id, $_SESSION['carrinho'][0]['ped_id']);

header('Location: /projeto de web 2.2/carrinho.php');
