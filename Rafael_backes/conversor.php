<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de DOLxBRL e BRLxDOL</title>
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
        .conversion a{
          padding: 10px 20px 10px 20px ;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            
        }
    </style>
</head>
<body>
<div class="conversion">
        <form action="" method="post">
            <label for="obs">OBS : Cotação utilizada no cálculo é 5,16</label><br>
            <br>
            <label for="dolar">Moeda: Dolar</label>
            <input type="number"  name="dolar" placeholder="Digite sua quantidade de dolar">
            <label for="real">Moeda: Real</label>
            <input type="number"  name="real" placeholder="Digite sua quatidade de Reais">
            <button type="submit">Calcular Conversão</button><br>
            <a href="/DEV3N222v/index.php">Voltar ao Menu</a>
            <label for="resultado">O Resultado da conversão é : </label>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $real = $_POST["real"];
                $dolar = $_POST["dolar"];
                $dolar = (float) $dolar;
                $real = (float) $real;
                $conversao = 0;

                if ($real == null && $dolar != 0  ) {
                   // $dolar = (float) $dolar;
                    $conversao = $dolar * 5.16; 
                    echo "A sua conversão de dolar para real é : " . $conversao;

                }else if ($real != 0 && $dolar == null){
                   // $real = (float) $real;
                    $conversao = $real / 5.16;
                    echo "A sua conversão de real para dolar é" . $conversao;
                }else if ($real ==null  && $dolar == null)
                    echo " por favor insira uma quantidade de valor em real ou dolar em seus respectivos campos !!";
            }
            ?>
    
</body>
</html>