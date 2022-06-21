<?php 
    $id = $_GET['id'];

    include('bdCarrinho.php');
    
    alterarQuantidade()($id);
    
    header('Location: /projeto de web 2.2/carrinho.php');
    