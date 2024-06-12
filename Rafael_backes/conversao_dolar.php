<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .conversion {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }
        .conversion input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .conversion button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .conversion button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="conversion">
        <form action="" method="post">
            <label for="Dolar">Moeda: Dolar</label>
            <input type="number" id="dolar" name="dolar" placeholder="Digite sua quantidade de dolar">
            <label for="real">Moeda: Real</label>
            <input type="number" id="altura" name="real" placeholder="Digite sua quatidade de Reais">
            <button type="submit">Calcular Conversão</button><br>
            <label for="resultado">O Resultado da conversão é : </label>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $real = $_POST["real"];
                $dolar = $_POST["dolar"];
                $conversion = 0;
                if ($real == null && $dolar != 0  ) {
                    $conversion = $dolar * 5.16; 
                    echo "A sua conversão de dolar para real é : " . $conversion;

                }else if ($real != 0   && $dolar == null){
                    $conversion = $real / 5.16;
                    echo "A sua conversão de real para dolar é" . $conversion;
                }else if ($real ==null   && $dolar == null)
                    echo " por favor insira uma quantidade de valor em real ou dolar em seus respectivos campos !!";

            }
            ?>
    
</body>
</html>