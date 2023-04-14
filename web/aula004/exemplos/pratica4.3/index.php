<?php
// Definindo um array com os nomes das imagens
$nomes = array("Gato", "Cachorro", "Hamster", "Lagartixa");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animais</title>
</head>
<body>
	<h1>Animais</h1>

	<!-- Criando um link para cada imagem, passando o nome como parâmetro na URL -->
	<a href="animal.php?nome=<?php echo $nomes[0]; ?>"><img src="img/cat.jpg" alt="" width="200px" height="200px"></a>
	<a href="animal.php?nome=<?php echo $nomes[1]; ?>"><img src="img/dog.jpg" alt="" width="200px" height="200px"></a>
	<a href="animal.php?nome=<?php echo $nomes[2]; ?>"><img src="img/hamster.jpg" alt="" width="200px" height="200px"></a>
	<a href="animal.php?nome=<?php echo $nomes[3]; ?>"><img src="img/largatixa.jpg" alt="" width="200px" height="200px"></a>
</body>
</html>
