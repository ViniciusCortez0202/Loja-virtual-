<?php

include('bdCarrinho.php');
session_start();

if(finalizarPedido($_SESSION['carrinho'][0]['ped_id'])) unset($_SESSION['carrinho']);
header("Location: carrinho.php");