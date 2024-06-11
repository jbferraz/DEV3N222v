<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Média de notas - Guilherme Medeiros</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/css/style.css">
    <script>
        function validarNota(input) {
            var nota = parseFloat(input.value);
            if (isNaN(nota) || nota < 0 || nota > 10) {
                alert("Por favor, insira uma nota válida entre 0 e 10.");
                input.value = "";
                setTimeout(function () {
                    input.focus();
                }, 0);
            }
        }
    </script>
</head>

<body>
    <h1>Recebimento e Cálculo da Nota Final dos Alunos</h1>
    <br><br>
    <form method="post" action="">
        <label for="valores">Insira os valores dos bimestres com vírgula:</label>
        <br>
        <input type="number" step="0.1" min="0" max="10" required name="Bm1" placeholder="Insira o Bm 1:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm2" placeholder="Insira o Bm 2:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm3" placeholder="Insira o Bm 3:" onblur="validarNota(this)">
        <input type="number" step="0.1" min="0" max="10" required name="Bm4" placeholder="Insira o Bm 4:" onblur="validarNota(this)">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <button type="submit" formaction="index.php">Voltar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notas = array(
            $_POST["Bm1"],
            $_POST["Bm2"],
            $_POST["Bm3"],
            $_POST["Bm4"]
        );

        $media = array_sum($notas) / count($notas);
        $resultado = $media >= 7 ? "O aluno foi aprovado com nota final: $media" : "Faltou " . (7 - $media) . " para atingir a média. O aluno foi reprovado com nota final: $media";
        echo "<h4>$resultado</h4>";
    }
    ?>
</body>

</html>
