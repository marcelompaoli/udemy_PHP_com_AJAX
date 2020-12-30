<?php
// Configurações Gerais
    header('Access-Control-Allow-Origin:*');
// Esta instrução acima determina que qualquer Domínio pode consultar a consulta desse arquivo.

// Abrir conexão
    $conecta = mysqli_connect("localhost","root","","andes");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);
    $retorno = array();

    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }

    echo json_encode($retorno);

// Fechar conexão
    mysqli_close($conecta);
?>
