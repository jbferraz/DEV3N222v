<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }
        .calculator input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .calculator button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .calculator button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <label for="peso">Peso (kg):</label>
            <input type="text" id="peso" name="peso" placeholder="Digite seu peso (kg)" required>
            <label for="altura">Altura (m):</label>
            <input type="text" id="altura" name="altura" placeholder="Digite sua altura (m)" required>
            <button type="submit">Calcular IMC</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                if (is_numeric($peso) && is_numeric($altura) && $altura > 0) {
                    $imc = $peso / ($altura * $altura);
                    $imc = number_format($imc, 2);

                    echo "Seu IMC é $imc. ";

                    // Classificação do IMC
                    if ($imc < 18.5) {
                        echo "Você está abaixo do peso.";
                    } elseif ($imc >= 18.5 && $imc < 24.9) {
                        echo "Você está com o peso normal.";
                    } elseif ($imc >= 25 && $imc < 29.9) {
                        echo "Você está com sobrepeso.";
                    } else {
                        echo "Você está com obesidade.";
                    }
                } else {
                    echo "Utilize ponto ao invés da vírgula e insira valores válidos.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
