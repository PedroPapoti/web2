<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

<h1>Links Numéricos</h1>

<?php
	// Verifica se um número foi enviado via GET e exibe na tela
	if (isset($_GET['numero'])) {
		echo "<p>Você clicou no link número {$_GET['numero']}.</p>";
	}
?>
	<li><a href="?numero=1">Número 1</a></li>
		<li><a href="?numero=2">Número 2</a></li>
		<li><a href="?numero=3">Número 3</a></li>
		<li><a href="?numero=5">Número 5</a></li>
		<li><a href="?numero=20">Número 20</a></li>
		<li><a href="?numero=32">Número 32</a></li>
		<li><a href="?numero=37">Número 37</a></li>
</body>
</html>