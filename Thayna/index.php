<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Calculo de Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--FORMULÁRIO-->
    <section class="formulario">
      <form method="post" action="">
         <h1>Recebimento e Calculo da Nota Final dos Alunos</h1>
         <label> Insira os valores dos bimestres com virgula: </label>
         <div class="form-container" >
         
        <div class="form-group">
        <label for="Bm1">1° Bim</label>
        <input type="float" id="Bm1" name="Bm1" size="5" placeholder="Nota 1°Bi" required>
        </div>

        <div class="form-group">      
         <label for="Bm1">2° Bim</label>
        <input type="float" id="Bm2" name="Bm2" size="5" placeholder="Nota 2°Bi" required>
        </div>

        <div class="form-group">
         <label for="Bm1">3° Bim</label>
        <input type="float" id="Bm3" name="Bm3" size="5" placeholder="Nota 3°Bi" required>
        </div>

        <div class="form-group">
         <label for="Bm4">4° Bim</label>
        <input type="float" id="Bm4" name="Bm4" size="5" placeholder="Nota 4°Bi" required>
        </div>
        </div>
        <div class="button-container" > 
    <button class="square-button" type="submit" >CALCULAR</button>
    <button class="square-button" type="reset"  >LIMPAR</button>
    <button class="square-button" formaction="index.php">Voltar</button>
    </div>
    </form>
</section>

<?php 
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