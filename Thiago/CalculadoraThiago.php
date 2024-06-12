<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/BlueLobster.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
        }

        .calculator {
            width: 300px;
            margin: 190px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5H7z"/></svg>');
            background-repeat: no-repeat;
            background-position-x: calc(100% - 10px);
            background-position-y: center;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <?php
            if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];
                $result = '';

                switch($operator){
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        break;
                    case "divide":
                        if($num2 != 0){
                            $result = $num1 / $num2;
                        } else {
                            $result = "Erro! Divisão por zero!";
                        }
                        break;
                    default:
                        $result = "Operação inválida";
                }
                echo "<h2>O resultado da operação é: $result</h2>";
            } else {
                echo "<form method='post'>";
                echo "<input type='text' name='num1' placeholder='Digite o primeiro número'>";
                echo "<input type='text' name='num2' placeholder='Digite o segundo número'>";
                echo "<select name='operator'>";
                echo "<option value='add'>+</option>";
                echo "<option value='subtract'>-</option>";
                echo "<option value='multiply'>*</option>";
                echo "<option value='divide'>/</option>";
                echo "</select>";
                echo "<button type='submit'>Calcular</button>";
                echo "</form>";
            }
        ?>
    </div>
</body>
</html>
