<?php

include('bdProdutos.php');

$nomeProduto =  $_POST['nome'];
$categoria =  $_POST['categoria'];
$preco =  (float) $_POST['preco'];
$descricao =  $_POST['descricao'];
$estoque =  $_POST['estoque'];
$destino = "sem";
echo $categoria;

if ($_FILES['arquivo']['error'] == 0) {
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];

    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensao = strtolower($extensao);

    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

        $novoNome = uniqid(time()) . '.' . $extensao;

        $destino = 'imagens / ' . $novoNome;

        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            if(cadastrarProduto($nomeProduto, $categoria, $preco, $descricao, $estoque, $destino))
                header('Location: loja.php');
                else
                    header('Location: cadastro.php');
        } else
            header('Location: cadastro.php');
    } else
        header('Location: cadastro.php');
} else
    header('Location: cadastro.php');




