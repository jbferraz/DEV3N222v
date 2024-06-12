<!DOCTYPE html>
<html>
<head>
    <title>Calcular para celsius - Douglas Alves</title>

    <style>
        body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        }
        .container{
            border-radius: 8px;
            width: 900px;
            text-align: center;
        }

        button[type="submit"]{
            padding: 7px 13px;
            border-radius: 6px;
        }

        button[type="reset"]{
            padding: 7px 13px;
            border-radius: 6px;
        }

        input[type="float"] {
            padding: 10px;
            margin-bottom: 5px;
            width: 200px;
        }

        .container{
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            padding: 70px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Converta Fahrenheit para Celsius</h1>
        <form method="post" action="">
            <input type="float" required name="Fh1" placeholder="Temperatura em Fahrenheit: ">
            <br><br>
            <button type="submit">Calcular</button>
            <button type="reset">Limpar/Nova consulta</button>
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Fh1 = $_POST["Fh1"];

        $valor = ((float) $Fh1 - 32) * 5/9;

        $resultadofinal = number_format($valor, 2);

        $result = "A temperatura em celsius = " . $resultadofinal;
        
        echo "<h4>" . $result . "</h4>";
    }
    ?>
    </div>
</body>
</html>