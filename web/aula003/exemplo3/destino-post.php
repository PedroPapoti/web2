<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>

    <?php
        $tituloPagina = filter_input(INPUT_POST, "tituloPagina", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo");
        $corTexto = filter_input(INPUT_POST, "corTexto");
        $urlImagem = filter_input(INPUT_POST, "urlImagem"); //https://vtp.ifsp.edu.br/images/CDI/Banners/CDI-VTP_-_Campus_Votuporanga_2019_-_banner.png
        $urlLink = filter_input(INPUT_POST, "urlLink"); // https://vtp.ifsp.edu.br/
        $corPlanoFundoPagina = filter_input(INPUT_POST, "corPlanoFundoPagina");
    ?>

    <style>
        body {
            color: <?php echo $corTexto; ?>;
            background-color: <?php echo $corPlanoFundoPagina; ?>;
        }
    </style>
</head>
<body>
    

    <h1><?php echo $tituloPagina; ?></h1>
    
    <hr>
    
    <p><?php echo $corpo; ?></p>

    <img src="<?php echo $urlImagem; ?>" alt=""><br>

    <a href="<?php echo $urlLink; ?>" target="_blank" rel="noopener noreferrer"><?php echo $urlLink; ?></a>
</body>
</html>