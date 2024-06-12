<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Conversor de Moedas</title>
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <h2>Escolha a moeda para conversão</h2>
    <form method="post" action="">
        <label for="escolha">Escolha a moeda:</label>
            <select id="escolha" name="escolha">
                <option value="real" selected>Real Br</option>
                <option value="dolarUs" >Dolar US</option>
                <option value="dolarAus">Dolar AUS</option>
                <option value="euro">Euro</option>
            </select>
        <input type="float" required name="valor" placeholder="Digite o valor para conversão:">
        <button type="submit">Converter</button>
    </form>

    <?php
        $dolarUs = 5.37;
        $dolarAus = 3.55;
        $euro = 5.76;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $escolha = $_POST["escolha"]; 
            $valor = $_POST["valor"];

            if($escolha == "real") {
                $moedaConvertida = $valor * 1;
                $result = "Com o valor inserido o resultado da conversão é: R$" . $moedaConvertida;
            } 
            if ($escolha == "dolarUs") { 
                $moedaConvertida = $valor * $dolarUs;
                $result = "Com o valor inserido o resultado da conversão é: R$" . $moedaConvertida;
            }
            if ($escolha == "dolarAus") {
                $moedaConvertida = $valor * $dolarAus;
                $result = "Com o valor inserido o resultado da conversão é: R$" . $moedaConvertida;
            }
            if ($escolha == "euro") {
                $moedaConvertida = $valor * $euro;
                $result = "Com o valor inserido o resultado da conversão é: R$" . $moedaConvertida;
            }
            echo "<h3>" . $result . "</h3>";
        }    
    ?>
</body>
</html>