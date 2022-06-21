<?php

function validar_cep($cep)
{

    if(is_numeric($cep)){
        $cepSemFormatacao = $cep;
    } else
         return false;

    $url = "https://viacep.com.br/ws/$cepSemFormatacao/json/";

    $endereco = json_decode(file_get_contents($url), true);

    if(sizeof($endereco) > 1){
        return $endereco;
    }
    return false;
}

