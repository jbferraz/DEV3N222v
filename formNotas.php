<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas - Rafael Backes</title>
</head>

<body>
    <h1>Recebimento e Calculo da Nota Final dos Alunos</h1>
    <br><br>
    <form method="post" action="">
        <label for="valores">Insira os valores dos bimestres com virgula:</label>
        <br>
        <input type="float" required name="Bm1" placeholder="Insira o Bm 1:">
        <input type="float" required name="Bm2" placeholder="Insira o Bm 2:">
        <input type="float" required name="Bm3" placeholder="Insira o Bm 3:">
        <input type="float" required name="Bm4" placeholder="Insira o Bm 4:">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <a href="index.php">Voltar</a>
        <!-- <button type="submit" formaction="index.php">Voltar</button> -->
    </form>
    <?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bm1 = $_POST["Bm1"];
        $bm2 = $_POST["Bm2"];
        $bm3 = $_POST["Bm3"];
        $bm4 = $_POST["Bm4"];
        $valorFinal = (float) $bm1 + (float) $bm2 + (float) $bm3 + (float) $bm4;
        $resultado = $valorFinal / 4;
        $diferencaPraMedia = 7 - $resultado;
        //Verificar menor nota
        if (($bm1 <= $bm2) && ($bm1 <= $bm3) && ($bm1 <= $bm4)){
            $menornota = $bm1;
        } elseif (($bm2 <= $bm1) && ($bm2 <= $bm3) && ($bm1 <= $bm4)){
            $menornota = $bm2;
        } elseif (($bm3 <= $bm1) && ($bm3 <= $bm2) && ($bm3 <= $bm4)){
            $menornota = $bm3;
        } elseif (($bm4 <= $bm1) && ($bm4 <= $bm2) && ($bm4 <= $bm3)){
            $menornota = $bm4;
        } 

        // Verifica o resltado e apresenta na tela
        if ($resultado == 0) {
            $result =  "O aluno foi reprovado com mota final : 0.0";
        } elseif ($resultado >= 7) {
            $result =  "O aluno em questão foi aprovado com nota final : " . $resultado;
        } else {
            $result = "Faltou " . $diferencaPraMedia . " para atingir a média. <br> O aluno em questão foi reprovado com nota final : " . $resultado . "<br> A menor nota foi: ". $menornota . "<br>" ;
        }

        echo "<h4>" . $result . "</h4>";
    }

    ?>

</body>

</html>