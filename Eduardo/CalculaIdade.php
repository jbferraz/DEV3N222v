<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="float"] {
            width: calc(50% - 5px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="reset"] {
            background-color: #dc3545;
            margin-left: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }

        .resultado {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

    </style>
</head>
<body>
<h1>Descubra seu IMC</h1>
    <br><br>
    <form method="post" action="">
        <label for="valores">Calcule o seu IMC:</label>
        <br>
        <input type="float" required name="Peso" placeholder="PESO:">
        <input type="float" required name="Altura" placeholder="ALTURA:">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <!-- <button type="submit" formaction="index.php">Voltar</button> -->
    </form>

    <?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Peso = $_POST["Peso"];
        $Altura = $_POST["Altura"];
    
        $valorFinal = (float) $Peso / (float) $Altura = pow($Altura, 2);;
        //Verificar menor nota
        echo '<div class="resultado">';
        if ($valorFinal <= 18.5){
             echo "Abaixo do Peso";
        } elseif (($valorFinal >= 18.5) && ($valorFinal <= 24.9) ){
            echo "Peso Normal";
        } elseif (($valorFinal >= 25) && ($valorFinal <= 29.9 )){
            echo "Sobrepeso";
        } 
        echo '</div>';

    }

    ?>
</body>
</html>