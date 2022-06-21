<?php

function cadastrarEndereco($logradouro, $bairro, $cidade, $estado, $cep, $numero)
{
    include('conexao.php');

    $sql = "INSERT INTO tb_enderecos (end_estado, end_logradouro, end_numero, end_cep, end_bairro, end_cidade)
        VALUES ('$estado', '$logradouro', '$numero', '$cep', '$bairro', '$cidade');";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function cadastrarCliente($nome, $email, $nomeUsuario, $senha, $cpf)
{
    include('conexao.php');

    $sql = "INSERT INTO tb_clientes (cli_nome, cli_email, cli_nome_de_usuario, cli_senha, cli_cpf)
            VALUES ('$nome', '$email', '$nomeUsuario', '$senha', '$cpf');";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function cadastrarAdm($nome, $email, $nomeUsuario, $senha, $cpf)
{
    include('conexao.php');

    $sql = "INSERT INTO tb_administradores (adm_nome, adm_email, adm_nome_de_usuario, adm_senha, adm_cpf)
            VALUES ('$nome', '$email', '$nomeUsuario', '$senha', '$cpf');";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function endCliente()
{
    include('conexao.php');

    $sql = "SELECT MAX(cli_id) as cli_id FROM tb_clientes";

    $cli_id = mysqli_fetch_assoc( mysqli_query($conn, $sql))['cli_id'];

    $sql = "SELECT MAX(end_id) as end_id FROM tb_enderecos";

    $end_id = mysqli_fetch_assoc( mysqli_query($conn, $sql))['end_id'];

    echo $end_id;
    $sql = "INSERT INTO tb_enderecos_dos_clientes (tb_enderecos_end_id, tb_clientes_cli_id)
            VALUES ('$end_id', '$cli_id');";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}

function endAdm()
{
    include('conexao.php');

    $sql = "SELECT MAX(adm_id) as adm_id FROM tb_administradores";

    $adm_id = mysqli_fetch_assoc( mysqli_query($conn, $sql))['adm_id'];

    $sql = "SELECT MAX(end_id) as end_id FROM tb_enderecos";

    $end_id = mysqli_fetch_assoc( mysqli_query($conn, $sql))['end_id'];

    echo $end_id;
    $sql = "INSERT INTO tb_enderecos_dos_administradores (tb_enderecos_end_id, tb_administradores_adm_id)
            VALUES ('$end_id', '$adm_id');";

    if (mysqli_query($conn, $sql)) return true;
    return false;
}