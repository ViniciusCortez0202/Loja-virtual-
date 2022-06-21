<?php

function validar_cep($cep)
{

    if (is_numeric($cep)) {
        $cepSemFormatacao = $cep;
    } else
        return false;

    $url = "https://viacep.com.br/ws/$cepSemFormatacao/json/";

    $endereco = json_decode(file_get_contents($url), true);

    if (sizeof($endereco) > 1) {
        return $endereco;
    }
    return false;
}

function validar_cpf($cpf)
{
    if (!is_numeric($cpf))
        return false;

    if ( preg_match ( '/(\d)\1{10}/', $cpf ) ) return false;

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
}

function validar_nascimento($nascimento){
    $nascimento = new DateTime($_POST['nascimento']);
        
   $dataAtual = new DateTime('NOW');
       
   $intervalo = date_diff($dataDeNascimento, $dataAtual);
   
   $inteiro = (int)$intervalo->format("%Y");


   if($inteiro>=18)  
    {
        return true;
    }
    else
    {
        return false;
    }
}