<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>

        <script src="_js/jquery.js"></script>
        <script>
            $.ajax({
                type: "GET",
                url: "https://openweathermap.org/city",
                // url: "https://api.hgbrasil.com/weather?woeid=455827",
                async: false
            }).done(function(data) {
                console.log(data.main.temp);
                console.log(data.name);
                console.log(data.weather[0].description);
            }).fail(function() {
                console.log("Falha");
            });
        </script>
    </body>
</html>