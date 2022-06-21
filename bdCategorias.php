<?php

function buscarCategorias(){
    include('conexao.php');

    $sql = "SELECT * FROM tb_categorias";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $categorias = array();
        while($categoria = mysqli_fetch_array($result)){
            array_push($categorias, $categoria);
        }
        return $categorias;
    }
    return false;
}