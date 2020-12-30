<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>


    <script>
        function retornarProdutos(data) {
            console.log(data);
            console.log(data[0].nomeproduto);
        }
    </script>

    <script src="http://127.0.0.1/php_ajax/unidade_07/gerar_json.php?callback=retornarProdutos">
    </script>
</body>

</html>