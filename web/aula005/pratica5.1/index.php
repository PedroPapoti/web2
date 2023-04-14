<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post" class="row g-3">

<div class="col-12">
    <label class="form-label" for="">Número:</label>
    <input class="form-control" type="text" id="tituloPagina" name="numero">
</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
    <button class="btn btn-warning" type="reset">Limpar</button>
</div>
</form>

<?php
    
     $numero = 0;
    if(isset($_POST["numero"])){
        $numero = filter_input(INPUT_POST, "numero");
        if(!is_numeric($numero)){
            echo "<br>O valor informado não é um número.<br>";
        }else{
              echo "<h1> Tabuada do $numero </h1>";
              for($num=0; $num<=10; $num++){
                    echo $num . " x " . $numero . " = " . ($numero * $numero) . "<br>";
                }

    }
}
?>
 
</body>
</html>