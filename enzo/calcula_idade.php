<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="efeitos2.css">
    <title>Resultado do Cálculo</title>
</head>
<body>
    <div class="container">
        <h2 class="titulo">Resultado do Cálculo</h2>
        <img src="img/img.1jfif" alt="" class="imagem">
        <?php
        // Verifica se o formulário foi submetido e se a data de nascimento foi enviada
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["data_nascimento"])) {
            // Obtém a data de nascimento do formulário
            $data_nascimento = $_POST["data_nascimento"];
            
            // Calcula a idade
            $data_atual = date("Y-m-d");
            $idade = date_diff(date_create($data_nascimento), date_create($data_atual))->y;
            
            // Exibe o resultado
            echo "<p class='resultado'>A idade é: $idade anos.</p>";
        } else {
            // Se o formulário não foi submetido ou a data de nascimento não foi enviada, exibe uma mensagem de erro
            echo "<p class='erro'>Por favor, preencha a data de nascimento.</p>";
        }
        ?>
    </div>
</body>
</html>