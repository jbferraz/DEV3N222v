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
        <label for="nome">Nome:</label>
        <input type="text" required name="nome" placeholder="Nome do aluno">
        <label for="turma">Turma:</label>
        <input type="text" required name="turma" placeholder="Turma do aluno">
        <br><br>
        <label for="valores">Insira os valores dos bimestres com vírgula:</label>
        <br>
        <input type="number" step="any" required name="Bm1" placeholder="Insira o Bm 1:">
        <input type="number" step="any" required name="Bm2" placeholder="Insira o Bm 2:">
        <input type="number" step="any" required name="Bm3" placeholder="Insira o Bm 3:">
        <input type="number" step="any" required name="Bm4" placeholder="Insira o Bm 4:">
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar/Nova consulta</button>
        <a href="index.php">Voltar</a>
    </form>

    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
                <th>Status</th>
                <th>Nota Final</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $alunos = array();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $turma = $_POST["turma"];
                $bm1 = $_POST["Bm1"];
                $bm2 = $_POST["Bm2"];
                $bm3 = $_POST["Bm3"];
                $bm4 = $_POST["Bm4"];
                $valorFinal = (float) $bm1 + (float) $bm2 + (float) $bm3 + (float) $bm4;
                $resultado = $valorFinal / 4;
                $status = '';
                
                if ($resultado >= 7) {
                    $status = "Aprovado";
                } else {
                    $status = "Reprovado";
                }

                // Adiciona os dados do aluno ao array
                $alunos[] = array(
                    'nome' => $nome,
                    'turma' => $turma,
                    'status' => $status,
                    'notaFinal' => $resultado
                );
            }

            // Exibe os dados dos alunos na tabela
            foreach ($alunos as $aluno) {
                echo "<tr>";
                echo "<td>" . $aluno['nome'] . "</td>";
                echo "<td>" . $aluno['turma'] . "</td>";
                echo "<td>" . $aluno['status'] . "</td>";
                echo "<td>" . $aluno['notaFinal'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>
