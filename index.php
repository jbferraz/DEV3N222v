<!DOCTYPE html>
<html>

<head>
	<title>Aula 01 PHP - DEV3N222v</title>
</head>

<body>
	<!-- Comentário no HTML -->
	<h1>Aula 01 PHP</h1>
	<p>teste fora do php</p>
	<a href="formNotas.php" >Calcular Notas</a><br>
	<a href="formNotasNovo.php" >Calcular Notas Novo</a><br>
	<a href="Rafael_backes/conversor.php">Conversor de moedas : BRL x DOL - Rafael Backes</a>
	<?php
		//Comentário de linha no PHP igual no Java
		echo "TESTE dentro da tag php";
		/*
				Comentário de Bloco igual ao Java 
				Várias linhas comentadas
				*/
		echo "<h3>Olá mundo!</h3>";
		print "teste de print";
		
		$anoNasc = 1981;
		$anoAtual = 2024;
		$idadeAproximada = $anoAtual - $anoNasc;
		$result =  "<br>Idade aproximada é: " . $idadeAproximada;
		$mult = 2 * 3;
		echo "<br>Multi 2 * 3 = " . $mult;
		echo $result;
		echo "<br> var_dump de anoNasc: ";
		var_dump($anoNasc);
		echo "<br> var_dump de result: ";
		var_dump($result);
		echo "<br>Teste de casting<br>";
		$x = "jair";
		echo "<p>" . $x . "</p>";
		var_dump($x);
		$x = (float) $x;
		var_dump($x);
		$x = (int) $x;
		var_dump($x);
		$x = (string) $x;
		var_dump($x);
		echo "<br>Outro Teste de casting com valor numérico<br>";
		$x = 5;
		var_dump($x);
		$x = (string) $x;
		var_dump($x);
		$x = (float) $x;
		var_dump($x);
		$x = (int) $x;
		var_dump($x);
		echo "<h3>Aula 03</h3>";
		$vet = ["Jair", 42 ,"Felipe D", 42 , "Guilherme", 22, "Lorenzo" , 19];
		echo "<p>Vetor:</p>";
		var_dump($vet);
		echo "<br>";
		echo $vet[4] . " " . $vet[5];
		echo "<br>Impimindo o Array com print_r: ";
		print_r($vet);
		echo "<hr>";
		echo "<p>Impimindo o Array com For: </p>";
		for ($i=0; $i < 8; $i+=2) { 
			echo "Incremento de i " . $i . "<br>";
			echo "Nome: " . $vet[$i] . "<br>" . "Idade: " . $vet[$i+1] . "<br>";
		}
		echo "<hr>";
		echo "<p>06/06/24 - Estrutura de Repetição e Decisão</p>";
		echo "<p>Impimindo o Array com While: </p>";
		$a = 0;
		while ($a < 8 ) {
			echo "Incremento de a " . $a . "<br>";
			echo "Nome: " . $vet[$a] . "<br>" . "Idade: " . $vet[$a+1] . "<br>";
			$a+=2;
		}
		echo "<hr>";
		echo "<p>Impimindo o Array com Do While: </p>";
		$b = 0;
		do {
			echo "Incremento de b " . $b . "<br>";
			echo "Nome: " . $vet[$b] . "<br>" . "Idade: " . $vet[$b+1] . "<br>";
			$b+=2;
		} while ($b < 8);

		$vet[8] = "teste";
		echo "<br>Inserindo e imprimindo uma nova posição: " . $vet[8] . "<br>";
		print_r($vet);
		echo "<br>";
		$vet[10] = "posição 10";
		print_r($vet);
		echo "<br>";
		echo "Imprimir pos. 9 não existente: " . $vet[9];
		echo "<br>";
		$vet["Turma"] = "DEVN3222v";
		print_r($vet);
		echo "<br>";
		var_dump($vet);
		echo "<br>Turma: " . $vet["Turma"];
		echo "<br>";
		$vet[9] = "Dica do Felipe D";
		print_r($vet);
		echo "Imprimir pos. 9: " . $vet[9];
		echo "<br>";
		$cars = array("Volvo", "BMW", "Toyota");
		var_dump($cars);
		$cars2 = array(
			array("Marca" => "Fiat", "Modelo" => "Pulse"),
			array("Marca" => "Cherry", "Modelo" => "Tiggo 3x Pro"),
			array("Marca" => "GM", "Modelo" => "Opala")
		);
		echo "<br>";
		print_r($cars2);
		echo "<br>Array Cars2: ";
		var_dump($cars2);
		echo "<br>Imprimindo com foreach o Cars2<br>";
		foreach($cars2 as $car){
			echo "Marca: " . $car["Marca"] . "<br>";
			echo "Modelo: " . $car["Modelo"] . "<br>";
			echo "----<br>";
		}
		echo "<hr>";
		echo "<p>If</p>";
		$num;
		$numP;
		$numI;
		// popular o array com numeros
		for ($i=0; $i < 11; $i++) { 
			$num[$i] = $i+1;
		}
		print_r($num);
		echo "<p>Quanto num são par e impar</p>";
		$contP = 0;
		$contI = 0;
		for ($i=0; $i < 11; $i++) { 
			if ($num[$i] % 2 == 0) {
				$contP++;
				$numP[] = $num[$i];
			}else{
				$contI++;
				$numI[] = $num[$i];
			}
		}
		echo "<p>Números pares: " . $contP . "</p>";
		print_r($numP);
		echo "<p>Números impares: " . $contI . "</p>";
		print_r($numI);
	?>
</body>

</html>