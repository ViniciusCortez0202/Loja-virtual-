<?php

function buscarPedidosCliente($id)
{
    include('conexao.php');

    $sql = "SELECT P.pro_id, P.pro_nome, P.pro_preco, D.pdp_quantidade, T.cat_tipo, P.pro_preco 
    * D.pdp_quantidade AS totalProduto, E.ped_valor_total AS total, ped_id, pro_imagem
        FROM tb_produtos P
        INNER JOIN tb_categorias T ON (T.cat_id = P.tb_categorias_cat_id)
        INNER JOIN tb_produtos_dos_pedidos D ON (D.tb_produtos_pro_id = P.pro_id)
        INNER JOIN tb_pedidos E ON (D.tb_pedidos_ped_id = E.ped_id)
        INNER JOIN tb_clientes C ON (E.tb_clientes_cli_id = C.cli_id)
        WHERE cli_id = '$id' AND ped_status = 'CR';";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $carrinho = array();
        while ($res = mysqli_fetch_assoc($result)) {
            array_push($carrinho, $res);
        }
        return $carrinho;
    }
    return false;
}

function excluirProdutoPedido($id)
{

    include('conexao.php');

    $sql = "DELETE FROM tb_produtos_dos_pedidos WHERE tb_produtos_pro_id = $id;";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function alterarQuantidadeProduto($id, $quantidade)
{

    include('conexao.php');

    $sql = "UPDATE tb_produtos_dos_pedidos SET pdp_quantidade = $quantidade WHERE tb_produtos_pro_id = $id";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function inserirProduto($idProduto, $idPedido)
{

    include('conexao.php');

    $sql = "INSERT INTO tb_produtos_dos_pedidos (pdp_quantidade, tb_produtos_pro_id, tb_pedidos_ped_id)
     VALUES (1, $idProduto, $idPedido);";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function idPedido($id)
{
    include('conexao.php');

    $sql = "SELECT ped_id FROM tb_pedidos 
            WHERE tb_clientes_cli_id = $id AND ped_status = 'CR' ORDER BY ped_data_hora limit 1;";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result)['ped_id'];
    } else {
        criarPedido($id);
        return idPedido($id);
    }
}

function criarPedido($id)
{
    include('conexao.php');

    $sql = "INSERT INTO tb_pedidos (ped_data_hora, ped_valor_total, ped_status, tb_clientes_cli_id)
    VALUES (NOW(), 0, 'CR', $id)";

    if (mysqli_query($conn, $sql)) {
        return true;
    }
    return false;
}

function valorTotalSoma($idProduto, $idPedido)
{

    include("conexao.php");

    $sql = "UPDATE tb_pedidos SET ped_valor_total = ped_valor_total + (SELECT pro_preco FROM tb_produtos 
                                                    WHERE pro_id = $idProduto)
            WHERE ped_id = $idPedido;";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function valorTotalSub($idProduto, $idPedido)
{

    include("conexao.php");

    $sql = "UPDATE tb_pedidos SET ped_valor_total = ped_valor_total - (SELECT pro_preco FROM tb_produtos 
                                                    WHERE pro_id = $idProduto)
            WHERE ped_id = $idPedido;";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function finalizarPedido($idPedido)
{
    include('conexao.php');

    $sql = "UPDATE tb_pedidos SET ped_status = 'AP' WHERE ped_id = $idPedido;";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}
