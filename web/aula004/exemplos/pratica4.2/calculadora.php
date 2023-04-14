<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora média</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container notas">
        <h1>Calculadora média</h1>
        <hr>
        <form class="notas" action="destino.php" method="post">
            <div>
                <label for="">Nota 1:</label>
                <input name="nota1" type="number" min="0"  max="10">
            </div>
            <div>
                <label for="">Nota 2:</label>
                <input name="nota2" type="number" min="0"  max="10">
            </div>
            <div>
                <label for="">Nota 3:</label>
                <input name="nota3" type="number" min="0"  max="10">
            </div>

            <div>
                <button class="btn btn-success" type="submit">Calcular média</button>
                <button class="btn btn-warning" type="reset">Limpar</button>
            </div>
        </form>
    </div>

    <style>
        .notas {
            text-align: center;
        }
    </style>
</body>
</html>