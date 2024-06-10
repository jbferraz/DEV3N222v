<?php
    // Verifica se houve um POST e processa as informações
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bm1 = $_POST["Bm1"];
        $bm2 = $_POST["Bm2"];
        $bm3 = $_POST["Bm3"];
        $bm4 = $_POST["Bm4"];
        $valorFinal = (float) $bm1 + (float) $bm2 + (float) $bm3 + (float) $bm4;
        $resultado = $valorFinal / 4;

        // Array associativo com os bimestres e suas notas
        $bimestres = array(
            'Bm1' => $bm1,
            'Bm2' => $bm2,
            'Bm3' => $bm3,
            'Bm4' => $bm4
        );

        // Encontra a maior e a menor nota
        $maiorNota = max($bimestres);
        $menorNota = min($bimestres);

        // Encontra o bimestre correspondente à maior e à menor nota
        $bmMaiorNota = array_search($maiorNota, $bimestres);
        $bmMenorNota = array_search($menorNota, $bimestres);

        // Verifica o resultado e apresenta na tela
        if ($resultado == 0) {
            $result =  "O aluno foi reprovado com mota final: 0.0";
        } elseif ($resultado >= 7) {
            $result =  "O aluno em questão foi aprovado com nota final: " . $resultado;
        } else {
            $result =  "O aluno em questão foi reprovado com nota final: " . $resultado;
        }

        // Apresenta os resultados
        echo "<h4>" . $result . "</h4>";
        echo "<p>Maior nota: $maiorNota (Bimestre: $bmMaiorNota)</p>";
        echo "<p>Menor nota: $menorNota (Bimestre: $bmMenorNota)</p>";
    }
?>
<a href="formNotasNovo.php">Voltar</a>
