<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora média</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <?php
    $nota1 = filter_input(INPUT_POST, "nota1");
    $nota2 = filter_input(INPUT_POST, "nota2");
    $nota3 = filter_input(INPUT_POST, "nota3");

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 4) {
        $resultado = 'Reprovado';
        $corResultado = 'red';
    } else if ($media < 6) {
        $resultado = 'Recuperação';
        $corResultado = 'yellow';
    } else if ($media >= 6) {
        $resultado = 'Aprovado';
        $corResultado = 'green';
    }
    
    ?>


    <style>
        #resultado {
            color: <?= $corResultado ?>;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praticando - Calculadora média</h1>
        <hr>
        <p>Um aluno com as notas <?php echo "<b>$nota1, $nota2 e $nota3</b>"; ?> tem uma média igual a <?= "<b>$media</b>"; ?></p>

        <br>

        <p>Com essa média o aluno está <span id="resultado"><?= $resultado; ?></span></p>
    </div>
</body>
</html>