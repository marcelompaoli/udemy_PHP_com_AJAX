<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).then(sucesso,falha);

            function sucesso(valor){
                $('div#nome').html(`<h1>${valor}</h1>`);
            }

            function falha(){
                $('div#nome').html('<h1>Falha no carregamento</h1>');
            }

        </script>
    </body>
</html>