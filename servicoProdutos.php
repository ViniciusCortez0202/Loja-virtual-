<?php

require('bdProdutos.php');


function buscar($texto, $categoria, $menorP, $maiorP) //Decide qual função de busca é melhor dado o texto de pesquisa o maior e o menor preco e categoria.
{
    $produtos = null;
    $id = isset($_SESSION['ultimoid']) ? $_SESSION['ultimoid'] : 0;
    
    $menorP = $menorP <= 0 ? 1 : $menorP;
    $maiorP = $maiorP <= 0 ? 500 : $maiorP;


    if ($texto !=  "") {
        $produtos = buscarProdutosPorPesquisa($texto, $menorP, $maiorP, $id);
        
        return $produtos;

    } else if ($categoria != "") {
        $produtos = buscarProdutosPorCategoria($categoria, $menorP, $maiorP, $id);
        return $produtos;

    } else {
        $produtos = buscarProdutos($menorP, $maiorP, $id);
        return $produtos;
    }

    return false;
}
