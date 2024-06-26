<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #007bff;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        input[type="date"] {
            padding: 8px;
            margin-bottom: 20px;
            width: calc(100% - 16px);
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .resultado {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Idade</h1>
        <form id="formIdade">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
            <button type="submit">Calcular Idade</button>
        </form>
        <div class="resultado" id="resultadoIdade">
            <!-- Aqui será exibido o resultado da idade -->
        </div>
    </div>

    <script>
        document.getElementById("formIdade").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);
            var dataNascimento = formData.get("data_nascimento");
            
            var hoje = new Date();
            var dataNasc = new Date(dataNascimento);
            var idade = hoje.getFullYear() - dataNasc.getFullYear();
            var mes = hoje.getMonth() - dataNasc.getMonth();
            if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
                idade--;
            }
            
            document.getElementById("resultadoIdade").innerText = "Idade: " + idade + " anos";
        });
    </script>
</body>
</html>
