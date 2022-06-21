<?php

function logar_cliente($nome, $senha)
{
    include("conexao.php");

    $sql = "SELECT * FROM tb_clientes 
            INNER JOIN tb_enderecos_dos_clientes ON (tb_clientes_cli_id = cli_id) 
            INNER JOIN tb_enderecos ON (tb_enderecos_end_id = end_id)
            WHERE cli_nome_de_usuario = '$nome' AND cli_senha = '$senha';";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    return false;
}

function logar_adm($nome, $senha)
{
    include("conexao.php");
    
    $sql = "SELECT * FROM tb_administradores
            INNER JOIN tb_enderecos_dos_administradores ON (tb_administradores_adm_id = adm_id) 
            INNER JOIN tb_enderecos ON (tb_enderecos_end_id = end_id)
            WHERE adm_nome_de_usuario = '$nome' AND adm_senha = '$senha';";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    return false;
}

