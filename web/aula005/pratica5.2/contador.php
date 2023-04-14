<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Contador</title>
</head>
<body>

<div class="container">
        <h1>Contador</h1>
        <hr>
        <form action="./resultado.php" method="post" class="row g-3">

            <div class="col-12">
                <label class="form-label" for="">Inicio:</label>
                <input class="form-control" type="number" id="tituloPagina" name="inicio">
            </div>

            <div class="col-12">
                <label class="form-label" for="">Final:</label>
                <input class="form-control" type="number" id="tituloPagina" name="final">
            </div>

            <div class="col-12">
                <label class="form-label" for="">Incremento:</label>
                <input class="form-control" type="number" id="tituloPagina" name="incremento">
            </div>

            

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-warning" type="reset">Limpar</button>
                
            </div>
        </form>
    </div>
    
</body>
</html>