<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Parâmetros informados:</h1>
<?php
    
    $inicio = filter_input(INPUT_POST, "inicio");
    $final = filter_input(INPUT_POST, "final");
    $incremento = filter_input(INPUT_POST, "incremento");

     

     echo "Início : " .$inicio. "<br>";
     echo "Final : " .$final. "<br>";
     echo "Incremento: " .$incremento. "<br>";

     for($num = $inicio; $num <= $final; $num += $incremento){
       echo $num;
    }

   

    /*
    $inicio = $_POST["inicio"];
	$final = $_POST["final"];
	$incremento = $_POST["incremento"];

    echo "Início : " .$inicio. "<br>";
    echo "Final : " .$final. "<br>";
    echo "Incremento: " .$incremento. "<br>";

	for ($i = $inicio; $i <= $final; $i += $incremento) {
		echo $i;
	}

    */

?>
</body>
</html>