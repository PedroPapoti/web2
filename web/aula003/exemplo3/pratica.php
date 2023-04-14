<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>
        <hr>
        <form action="destino-post.php" method="post" class="row g-3">

            <div class="col-12">
                <label class="form-label" for="">Título da página:</label>
                <input class="form-control" type="text" id="tituloPagina" name="tituloPagina">
            </div>

            <div class="col-12">
                <label class="form-label" for="">Corpo:</label>
                <textarea class="form-control" name="corpo" id="corpo" cols="35" rows="5"></textarea>
            </div>

            <div class="col-12">
                <label class="form-label" for="">Cor texto:</label>
                <input class="form-control" type="color" name="corTexto" id="corTexto">
            </div>

            <div class="col-12">
                <label class="form-label" for="">URL de uma imagem:</label>
                <input class="form-control" type="url" name="urlImagem" id="urlImagem">
            </div>

            <div class="col-12">
                <label class="form-label" for="">URL de link:</label>
                <input class="form-control" type="url" name="urlLink" id="urlLink">
            </div>
            
            <div class="col-12">
                <label class="form-label" for="">Cor de plano de fundo da página:</label>
                <input class="form-control" type="color" name="corPlanoFundoPagina" id="corPlanoFundoPagina">
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-warning" type="reset">Limpar</button>
                
            </div>
        </form>
    </div>
</body>
</html>