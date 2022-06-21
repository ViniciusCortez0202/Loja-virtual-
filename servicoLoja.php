<?php

organizarProdutos();

function organizarProdutos()
{
    session_start();
    include('servicoProdutos.php');
    $texto = "";
    $texto = isset($_POST['texto']) ? $_POST['texto'] : "";
    $categorias = isset($_POST['categoria']) ? $_POST['categoria'] : "";
    $menorP = 0;
    $maiorP = 0;
    $categoria = "";
    if($texto != "")
        $texto = "%".$texto."%";
    //formatando o campo categoria para pesquisar
    if ($categorias != "") {
        foreach ($categorias as $cat) {
            $categoria .= " " . $cat;
        }
        $categoria = $categoria . " ";
    }
    // formata o campo de pesquisa por valor do produto retirando - e $
    if (isset($_POST['valor'])) {
        $valor = explode(" ", str_replace("$", "", str_replace("-", "", $_POST['valor'])));

        $menorP = intval($valor[0]);
        $maiorP = intval($valor[2]);
    }

    organizarCategorias();
    $_SESSION['produtos'] = buscar($texto, $categoria, $menorP, $maiorP);

    header('Location:loja.php');
}

function organizarCategorias()
{
    include('bdCategorias.php');

    $_SESSION['categorias'] = buscarCategorias();
    //print_r($_SESSION['categorias']);
}
