<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bm1 = $_POST["Bm1"];
        $bm2 = $_POST["Bm2"];
        $bm3 = $_POST["Bm3"];
        $bm4 = $_POST["Bm4"];
        $valorFinal = (float) $bm1 + (float) $bm2 + (float) $bm3 + (float) $bm4;
        $resultado = $valorFinal / 4;


        // Verifica o resltado e apresenta na tela
        if ($resultado == 0) {
            $result =  "O aluno foi reprovado com mota final : 0.0";
        } elseif ($resultado >= 7) {
            $result =  "O aluno em questão foi aprovado com nota final : " . $resultado;
        } else {
            $result =  "O aluno em questão foi reprovado com nota final : " . $resultado;
        }

        echo "<h4>" . $result . "</h4>";

        if ($resultado >= 7) {
            $feedback = "Parabéns, você foi aprovado!";
        } elseif ($resultado >= 5) {
            $feedback = "Você está na média, mas pode melhorar.";
        } else {
            $feedback = "Você foi reprovado, estude mais!";
        }

        echo "<h4>O aluno $nomeAluno obteve a nota final: $resultadoFormatado</h4>";
            echo "<p>$feedback</p>";
        } else {
            echo "<h4>Preencha todos os campos.</h4>";
        }
    

        echo "<h4>" . $result . "</h4>";
    

    

    ?>
    <a href="formNotasNovo.php">Voltar</a>
</body>
</html>

