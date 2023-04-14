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
        .link {
			margin-right: 10px;
		}
	</style>
</head>
<body>
    <h1>Praticando 3 - Números primos </h1>
    <hr>
	<!-- Cria os 7 links com o número correspondente -->
	<a href="?numero=1" class='link' >Número 1</a>
	<a href="?numero=2" class='link'>Número 2</a>
	<a href="?numero=3" class='link'>Número 3</a>
	<a href="?numero=5" class='link'>Número 5</a>
	<a href="?numero=20" class='link'>Número 20</a>
	<a href="?numero=32" class='link'>Número 32</a>
	<a href="?numero=37" class='link'>Número 37</a>

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
			
			if($primo) {
                echo "<p>O número  <span class='green'>$numero é </span> um número <span class='green'> Primo </span>. Além disso ele é um número <span class='green'> $paridade </span> </p>";
				
			} else {
				echo "<p>O número  <span class='red'>$numero não é </span> um número <span class='red'> Primo </span>. Além disso ele é um número <span class='red'> $paridade </span> </p>";
			}
			echo "</p>";
		}
	?>
</body>
</html>