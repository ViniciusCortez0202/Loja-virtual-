<?php


function buscarProdutos($menorP, $maiorP, $ultimoProduto)
{
    include('conexao.php');

    $sql = "SELECT * FROM tb_produtos P
                INNER JOIN tb_categorias C ON (P.tb_categorias_cat_id = C.cat_id)                
                WHERE pro_preco BETWEEN $menorP AND $maiorP 
                AND pro_estoque >= 1 AND pro_estado = 1
                AND pro_id > $ultimoProduto ORDER BY 1;";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $produtos = array();
        while ($res = mysqli_fetch_assoc($result)) {
            array_push($produtos, $res);
        }
        return $produtos;
    }

    return false;
}

function buscarProdutosPorCategoria($categoria, $menorP, $maiorP, $ultimoProduto)
{
    include('conexao.php');

    $categoria = str_replace(" ", "%", $categoria);

    $sql = "SELECT * FROM tb_produtos P
                INNER JOIN tb_categorias C ON (P.tb_categorias_cat_id = C.cat_id)                
                WHERE pro_preco BETWEEN $menorP AND $maiorP 
                AND pro_estoque >= 1 AND pro_estado = 1
                AND pro_id > $ultimoProduto AND cat_tipo LIKE '$categoria' ORDER BY 1;";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $produtos = array();
        while ($res = mysqli_fetch_assoc($result)) {
            array_push($produtos, $res);
        }
        return $produtos;
    }

    return false;
}

function buscarProdutosPorPesquisa($texto, $menorP, $maiorP, $ultimoProduto)
{
    include('conexao.php');

    $texto = str_replace(" ", "%", $texto);

    $sql = "SELECT * FROM tb_produtos P
                INNER JOIN tb_categorias C ON (P.tb_categorias_cat_id = C.cat_id)                
                WHERE P.pro_preco BETWEEN $menorP AND $maiorP 
                AND P.pro_estoque >= 1 AND pro_estado = 1
                AND P.pro_id > $ultimoProduto 
                AND P.pro_nome LIKE '$texto' OR P.pro_descricao LIKE '$texto' OR C.cat_tipo = '$texto'
                ORDER BY 1;";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $produtos = array();
        while ($res = mysqli_fetch_assoc($result)) {
            array_push($produtos, $res);
        }
        return $produtos;
    }

    return false;
}

function buscarProdutosHome()
{
    include('conexao.php');
echo "teste";
    $sql = "SELECT * FROM tb_produtos P
                INNER JOIN tb_categorias C ON (P.tb_categorias_cat_id = C.cat_id)                
                AND P.pro_estoque >= 1 AND pro_estado = 1
                ORDER BY RAND() LIMIT 8;";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $produtos = array();
        while ($res = mysqli_fetch_assoc($result)) {
            array_push($produtos, $res);
        }
        return $produtos;
    }

    return false;
}

function cadastrarProduto($nome, $categoria, $preco, $descricao, $estoque, $endImagen){

    include('conexao.php');

    $sql = "INSERT INTO tb_produtos(pro_nome, pro_imagem, tb_categorias_cat_id, pro_preco, pro_estoque, pro_descricao)
             VALUES ('$nome', '$endImagen', $categoria, $preco, $estoque, '$descricao');";

    if(mysqli_query($conn, $sql)) return true;
    return false;

}