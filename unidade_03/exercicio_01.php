<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com AJAX</title>
</head>

<body>
<div id="curso"></div>
<div class="curso"></div>
<div class="curso"></div>
<div class="curso"></div>
<div class="curso"></div>


    <script src="jquery.js"></script>
    <script>
        $('div#curso').load('dados.txt'); // mostrar DIV via ID
        $('div.curso:first').load('dados.txt').css('color', 'red'); // mostrar somente a primeira DIV via CASS
        $('div.curso').load('dados.txt'); // Mostrar todas as DIVS com class
    </script>
</body>

</html>