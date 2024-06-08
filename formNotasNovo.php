<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas</title>
</head>

<body>
    <h1>Recebimento e Calculo da Nota Final dos Alunos</h1>
    <br><br>
    <form method="post" action="calculaNotas.php">
        <label for="valores">Insira os valores dos decimais com ponto:</label>
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

</body>

</html>