<?php

function buscarPedidos()
{

    include("conexao.php");

    $sql = "SELECT * FROM tb_pedidos 
            INNER JOIN tb_clientes ON (tb_clientes_cli_id = cli_id)
            WHERE ped_status = 'AP';";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $pedidos = array();
        while ($pedido = mysqli_fetch_array($result)) {
            array_push($pedidos, $pedido);
        }
        return $pedidos;
    }
    return false;
}

function confirmarPedido($id)
{

    include("conexao.php");

    $sql = "UPDATE tb_pedidos SET ped_status = 'EP'
            WHERE ped_id = $id;";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}
