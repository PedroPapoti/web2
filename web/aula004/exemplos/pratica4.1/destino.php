<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1 class="my-3">Destino GET</h1>
        <hr>
        <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
        $nomeEmail = "";

        if ($nome || $email) {
            echo "<p>Nome informado: $nome<br>Email: $email</p>";
            $nomeEmail = "&nome=$nome&email=$email";
        }
        ?>
        <br>
        <p>
            <a href="destino.php?cor=<?= $cor ?>&nome=Eder&email=epansani@gmail.com">
                [nome = Eder | email = epansani@gmail.com]
            </a>
            <br><br>
            <a href="destino.php?cor=<?= $cor ?>&nome=José+da+Silva&email=jose1987@outlook.com">
                [nome = José da Silva | email = jose1987@outlook.com]
            </a>
            <br><br>
            <a href="destino.php">Limpar tudo</a>
            <br><br>
            
            <a href="destino.php?cor=lightcoral<?= $nomeEmail ?>">
                <img src="img/red.png" alt="">
            </a>

            <a href="destino.php?cor=lightgreen<?= $nomeEmail ?>">
                <img src="img/green.png" alt="">
            </a>

            <a href="destino.php?cor=lightblue<?= $nomeEmail ?>">
                <img src="img/blue.png" alt="">
            </a>
        </p>

        <style>
            body {
                background-color: <?php echo $cor ?>;
            }

            img {
                width: 220px;
            }
        </style>
    </div>
</body>
</html>
