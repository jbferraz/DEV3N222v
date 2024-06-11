<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas - Rafael Backes</title>
    <script>
        function validarNota(input) {
            var nota = parseFloat(input.value);
            if (isNaN(nota) || nota < 0 || nota > 10) {
                alert("Por favor, insira uma nota válida entre 0 e 10.");
                input.value = "";
                setTimeout(function() {
                    input.focus();
                }, 0);
                //
            }
        }
    </script>
</head>

<body>
    <h1>Recebimento e Cálculo da Nota Final dos Alunos</h1>
    <br><br>
    <form method="post" action="">
    <label for="nome">Nome do Aluno:</label>
        <input type="text" required name="nome" placeholder="Insira o nome do aluno">
        <br><br>
        <label for="valores">Insira os valores dos bimestres com virgula:</label>
        <br>
        <input type="number" step="0.1" min="0" max="10" required name="Bm1" placeholder="Insira o Bm 1:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm2" placeholder="Insira o Bm 2:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm3" placeholder="Insira o Bm 3:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm4" placeholder="Insira o Bm 4:" onblur="validarNota(this)">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <a href="index.php">Voltar</a>
        <!-- <button type="submit" formaction="index.php">Voltar</button> -->
    </form>
    <?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $bm1 = $_POST["Bm1"];
        $bm2 = $_POST["Bm2"];
        $bm3 = $_POST["Bm3"];
        $bm4 = $_POST["Bm4"];
        $valorFinal = (float) $bm1 + (float) $bm2 + (float) $bm3 + (float) $bm4;
        $resultado = $valorFinal / 4;
        $diferencaPraMedia = 7 - $resultado;
        // Verifica o resultado e apresenta na tela
        if ($resultado == 0) {
            $result =  "O aluno " . $nome . " foi reprovado com nota final: 0.0";
        } elseif ($resultado >= 7) {
            $result =  "O aluno " . $nome . " foi aprovado com nota final: " . $resultado;
        } else {
            $result = "Faltou " . $diferencaPraMedia . " para atingir a média. <br> O aluno " . $nome . " foi reprovado com nota final: " . $resultado . "<br>";
        }

        echo "<h4>" . $result . "</h4>";
    }

    ?>

</body>

</html>
