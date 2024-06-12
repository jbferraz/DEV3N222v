<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor Temperatura</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./css/sytle.css">
    </head>
    <body>
        <main>
            <form method="post" action="">
                <select name="tipo">
                    <option value="Celsius">Celsius</option>
                    <option value="Fahrenheit">Fahrenheit</option>
                </select>
                <input type="float" name="temp" required>
                <button type="submit">Calcular</button>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tipo = $_POST["tipo"];
                    $temp = $_POST["temp"];
                    $resultado = 0;
                    $tipoResultado = "Celsius";
                    if ($tipo == "Celsius") {
                        $resultado = $temp * 1.8 + 32;
                        $tipoResultado = "Fahrenheit";
                    }
                    else {
                        $resultado = ($temp - 32) / 1.8;
                    }
                    $resultado = number_format($resultado, 2, '.', '');
                    echo "<br><p>" . $temp . "° " . $tipo . " e igual a <b>" . $resultado . "</b>° " . $tipoResultado . "<p>";
                }
            ?>
        </main>
    </body>
</html>
