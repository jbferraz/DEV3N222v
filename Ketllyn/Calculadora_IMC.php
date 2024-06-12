<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #d3d3d3; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            text-align: center;
            border: 1px solid #808080; 
            padding: 20px; 
            background-color: #ffffff; 
            width: 400px; /* Ajuste da largura da caixa */
        }
        form {
            width: 300px;
            text-align: left; /* Centraliza os rótulos */
            margin: 0 auto;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            color: #808080;
        }
        input[type="text"]::placeholder {
            color: #4169E1;
            opacity: 1;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #808080; 
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            color: #4169E1; 
        }
        h2, h3 {
            font-family: Arial, sans-serif;
            color: #4169E1; 
        }
    </style>
</head>
<body>

<div class="content">
    <h2>Calculadora de IMC</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div style="text-align: center;">
            Altura (em metros): <input type="text" name="altura" placeholder="Digite sua altura"><br><br>
            Peso (em quilogramas): <input type="text" name="peso" placeholder="Digite seu peso"><br><br>
        </div>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    function calcularIMC($altura, $peso) {
        if ($altura > 0 && $peso > 0) {
            return $peso / ($altura * $altura);
        } else {
            return "Altura e peso devem ser maiores que zero.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $imc = calcularIMC($altura, $peso);
        echo "<h3>Seu IMC é: $imc</h3>";
    }
    ?>
</div>

</body>
</html>
