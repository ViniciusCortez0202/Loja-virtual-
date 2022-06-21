<?php

    include('bdPedidos.php');

    $id = $_GET['id'];

    confirmarPedido($id);
    header('Location: /projeto de web 2.2/vendas.php');