<!DOCTYPE html>
<html>
<head>
	<title>Links</title>
	<style>
		.green {
			background-color: green;
		}
	</style>
</head>
<body>
	<?php
		// Verifica se o número foi enviado através do parâmetro "numero"
		if(isset($_GET["numero"])) {
			$numero = $_GET["numero"];
			// Verifica se o número é par ou ímpar
			if($numero % 2 == 0) {
				$paridade = "par";
			} else {
				$paridade = "ímpar";
			}
			// Verifica se o número é primo
			$primo = true;
			for($i = 2; $i <= sqrt($numero); $i++) {
				if($numero % $i == 0) {
					$primo = false;
					break;
				}
			}
			// Imprime o parágrafo informando o número clicado, se é par ou ímpar e se é primo ou não
			echo "<p>Você clicou no link do número <span class='green'>$numero</span>.";
			echo " Esse número é $paridade e ";
			if($primo) {
				echo "é primo.";
			} else {
				echo "não é primo.";
			}
			echo "</p>";
		}
	?>
	<!-- Cria os 7 links com o número correspondente -->
	<a href="?numero=1">Link 1</a><br>
	<a href="?numero=2">Link 2</a><br>
	<a href="?numero=3">Link 3</a><br>
	<a href="?numero=4">Link 4</a><br>
	<a href="?numero=5">Link 5</a><br>
	<a href="?numero=6">Link 6</a><br>
	<a href="?numero=7">Link 7</a><br>
	
</body>
</html>
