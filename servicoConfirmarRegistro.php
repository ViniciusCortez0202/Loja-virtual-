<?php

if($_GET['tipo'] == 'C'){
    criarCliente();
} elseif($_GET['tipo'] == 'A'){
    criarAdm();
}

function criarAdm()
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nomeUsuario = $_POST['usuario'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $cep = $_POST['cep'];
    $logradouro = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $numero = $_POST['numero'];

    include('bdCadastrarUsuarios.php');

    cadastrarEndereco($logradouro, $bairro, $cidade, $estado, $cep, $numero);
    cadastrarAdm($nome, $email, $nomeUsuario, md5($senha), $cpf);
    endAdm();

    header('Location: /projeto de web 2.2/loginAdm.php');
}

function criarCliente()
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nomeUsuario = $_POST['usuario'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $cep = $_POST['cep'];
    $logradouro = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $numero = $_POST['numero'];


    include('bdCadastrarUsuarios.php');

    cadastrarEndereco($logradouro, $bairro, $cidade, $estado, $cep, $numero);
    cadastrarCliente($nome, $email, $nomeUsuario, md5($senha), $cpf);
    endCliente();

    header('Location: /projeto de web 2.2/login.php');
}
