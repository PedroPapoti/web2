<!DOCTYPE html>
<html>
<head>
	<title>Links</title>
	<style>
		.green {
			background-color: green;
		}
		.red {
			background-color: red;
		}
		.par {
			background-color: lightgray;
		}
		.impar {
			background-color: lightblue;
		}
		.link {
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<?php
		// Cria um array com os números a serem exibidos
		$numeros = array(1, 2, 3, 5, 20, 32, 37);

		// Função para verificar se um número é primo
		function isPrimo($n) {
			if($n <= 1) {
				return false;
			}
			for($i = 2; $i <= sqrt($n); $i++) {
				if($n % $i == 0) {
					return false;
				}
			}
			return true;
		}

		// Verifica se o número foi enviado através do parâmetro "numero"
		if(isset($_GET["numero"])) {
			$numero = $_GET["numero"];
			// Verifica se o número é par ou ímpar
			if($numero % 2 == 0) {
				$paridade = "par";
				$par_class = "par";
			} else {
				$paridade = "ímpar";
				$par_class = "impar";
			}
			// Verifica se o número é primo
			if(isPrimo($numero)) {
				$primo = true;
				$primo_class = "green";
			} else {
				$primo = false;
				$primo_class = "red";
			}
			// Imprime o parágrafo informando o número clicado, se é par ou ímpar e se é primo ou não
			echo "<p>Você clicou no link do número <span class='$primo_class'>$numero</span>.";
			echo " Esse número é <span class='$par_class'>$paridade</span> e ";
			if($primo) {
				echo "é primo.</p>";
			} else {
				echo "não é primo.</p>";
			}
		}
	?>
	<!-- Cria os links com os números correspondentes -->
	<?php
		foreach($numeros as $numero) {
			echo "<a href='?numero=$numero' class='link'>Número $numero</a>";
		}
	?>
</body>
</html>
