<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas - Rafael Backes</title>
</head>

<body>
    <h1>Recebimento e Cálculo da Nota Final dos Alunos</h1>
    <br><br>
    <form method="post" action="">
        <label for="valores">Insira os valores dos bimestres com vírgula:</label>
        <br>
        <input type="text" required name="Bm1" placeholder="Insira o Bm 1:">
        <input type="text" required name="Bm2" placeholder="Insira o Bm 2:">
        <input type="text" required name="Bm3" placeholder="Insira o Bm 3:">
        <input type="text" required name="Bm4" placeholder="Insira o Bm 4:">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <a href="index.php">Voltar</a>
        <!-- <button type="submit" formaction="index.php">Voltar</button> -->
    </form>
    <?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize input para garantir que são números
        $bm1 = filter_input(INPUT_POST, 'Bm1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $bm2 = filter_input(INPUT_POST, 'Bm2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $bm3 = filter_input(INPUT_POST, 'Bm3', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $bm4 = filter_input(INPUT_POST, 'Bm4', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        // Calcula a nota final
        $valorFinal = ($bm1 + $bm2 + $bm3 + $bm4) / 4;

        // Formata a saída para exibir apenas uma casa decimal
        $resultado = number_format($valorFinal, 1);

        // Verifica o resultado e apresenta na tela
        if ($resultado >= 7) {
            $mensagem = "O aluno foi aprovado com nota final: " . $resultado;
        } else {
            $mensagem = "O aluno foi reprovado com nota final: " . $resultado;
        }

        echo "<h4>" . $mensagem . "</h4>";
    }
    ?>
</body>

</html>
