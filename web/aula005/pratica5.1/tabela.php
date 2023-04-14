<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
$tab = 0;
    if(isset($_POST["edTABUADA"])){
        $tab = $_POST["edTABUADA"];
        if(!is_numeric($tab)){
            echo "<br>O valor informado não é um número.<br>";
        }else{
              for($num=0; $num<=10; $num++){
                    echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
                }

    }
}

?>

<form method="post">
    <input type="text" name="edTABUADA" >
    <input type="submit">
</form>
</body>
</html>