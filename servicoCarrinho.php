<?php

    function buscarPedidos(){

        include('bdCarrinho.php');
        $id = $_SESSION['dadosUsuario']['cli_id'];
        $_SESSION['carrinho'] = buscarPedidosCliente($id);        
    }