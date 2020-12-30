<?php
// Preparar o Arquivo para o CallBack
// Se Existe o callback ou não
    $callback = isset($_GET['callback']) ? $_GET['callback'] : false;

// Abrir conexão
    $conecta = mysqli_connect("localhost","root","","andes");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);
    $retorno = array();

    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }

// Preparar o CallBack
    echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback? ')' : '');

// Fechar conexão
    mysqli_close($conecta);
?>