<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
//$arquivo = 'G:\AppsWeb\Formulario\arquivos\usuario.txt';
$arquivo = '.\..\arquivos\usuario.txt';

/*
/txt: significa que o arquivo .txt está na pasta raiz do sistema;

./txt: significa que o arquivo .txt está na mesma pasta que o script está rodando;

../txt: significa que o arquivo .txt está na pasta imediatamente acima da pasta em que o script PHP está rodando.
*/


switch($req){
    case 1:
        $nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, "txtTelefone", FILTER_SANITIZE_STRING);
		$cep = filter_input(INPUT_POST, "txtCep", FILTER_SANITIZE_STRING);
		$rua = filter_input(INPUT_POST, "txtRua", FILTER_SANITIZE_STRING);
		$bairro = filter_input(INPUT_POST, "txtBairro", FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, "txtCidade", FILTER_SANITIZE_STRING);
		$estado = filter_input(INPUT_POST, "txtEstado", FILTER_SANITIZE_STRING);

        $str = "Nome: {$nome} | E-mail: {$email} | Telefone: {$telefone} | CEP: {$cep} | Rua: {$rua} | Bairro: {$bairro} | Cidade: {$cidade} | Estado: {$estado}";

        $fp = fopen($arquivo, "a+");
        if(fwrite($fp, "\r\n{$str}\r\n")){
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;

    case 2:
        $fp = fopen($arquivo, "r+");
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto;
		
		
    break;

    default:
        echo "nada";
    break;
	
}