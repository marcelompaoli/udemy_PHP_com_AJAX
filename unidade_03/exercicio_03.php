<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="mensagem"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).done(function(valor) {
                $('div#nome').html(`<h1>${valor}</h1>`);
            }).fail(function() {
                $('div#nome').html(`<h1 style="color: red;">Falha no carregamento</h1>`);
            }).always(function() {
                $('div#mensagem').html('<h2>Teste de DONE, FAIL and ALWAYS - Realizado</h2>');
            })
        </script>
    </body>
</html>