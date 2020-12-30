<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>PHP com AJAX</title>
</head>

<body>

    <button id="botao">Carregar JSON</button>
    <div id="listagem"></div>


    <script src="jquery.js"></script>
    <script>

        $('button#botao').click(function() {
            $('div#listagem').css('display','block');
            carregarDados();
        });

        function carregarDados() {
            $.getJSON('_json/produtos.json', function(data) {
                var elemento;
                elemento = "<ul>";
                $.each(data, function(i, valor) {
                    elemento += "<li class='nome'>" + valor.nomeproduto + "</li>";
                    elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                });
                elemento += "</ul>";
                $('div#listagem').html(elemento);
            });
        }
    </script>
</body>

</html>