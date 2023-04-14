<?php

// Verificando se o parâmetro 'nome' foi passado na URL
if(isset($_GET['nome'])) {
	// Armazenando o nome do animal em uma variável
	$nome = $_GET['nome'];

	// Definindo as características de cada animal em um array associativo
	$caracteristicas = array(
		"Gato" => array(
			"Nome científico" => "Felis catus",
			"Tipo" => "Mamífero",
			"Dieta" => "Carnívoro",
			"Imagem" => "img/cat.jpg"
		),
		"Cachorro" => array(
			"Nome científico" => "Canis lupus familiaris",
			"Tipo" => "Mamífero",
			"Dieta" => "Omnívoro",
			"Imagem" => "img/dog.jpg"
		),
		"Hamster" => array(
			"Nome científico" => "Mesocricetus auratus",
			"Tipo" => "Mamífero",
			"Dieta" => "Herbívoro",
			"Imagem" => "img/hamster.jpg"
		),
		"Lagartixa" => array(
			"Nome científico" => "Hemidactylus mabouia",
			"Tipo" => "Réptil",
			"Dieta" => "Insetívoro",
			"Imagem" => "img/largatixa.jpg"
		)
	);

	// Verificando se o nome do animal existe no array de características
	if(array_key_exists($nome, $caracteristicas)) {
		// Exibindo o nome do animal em um parágrafo
        echo "<h1>Praticando - Animais </h1>";
		echo "<p>O animal selecionado é o $nome:</p>";

		// Exibindo as características do animal em uma lista
		echo "<ul>";
		foreach($caracteristicas[$nome] as $key => $value) {
			if($key == "Imagem") {
				// Exibindo a imagem do animal
				echo "<img src=\"$value\" alt=\"$nome\">";
			}
			else {
				echo "<li><strong>$key:</strong> $value</li>";
			}
		}
		echo "</ul>";

		// Adicionando um link para voltar à página principal
		echo "<a href=\"index.php\">Voltar à página principal</a>";
	}
	else {
		// Caso o nome do animal não exista no array de características
		echo "<p>Animal não encontrado.</p>";
	}
}
else {
	// Caso o parâmetro 'nome' não tenha sido passado na URL
	echo "<p>Nenhum animal selecionado.</p>";
}
?>


