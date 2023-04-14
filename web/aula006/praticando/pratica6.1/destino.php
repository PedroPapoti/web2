<?php
require './header.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$datahora = date('Y-m-d H:i:s');

$arquivo = fopen("contatos/Contado.txt", "a");
fwrite($arquivo, "Nome: $nome\n");
fwrite($arquivo, "Email: $email\n");
fwrite($arquivo, "Data/Hora: $datahora\n");
fwrite($arquivo, "Mensagem: $mensagem\n");
fwrite($arquivo, "------------------------\n");
fclose($arquivo);

?>

<h1>Formulário para contato</h1>
	<p>Nome: <?php echo $nome; ?></p>
	<p>Email: <?php echo $email; ?></p>
	<p>Mensagem: <?php echo $mensagem; ?></p>
    <p>Data/Hora: <?php echo $datahora; ?></p>
    <a class="btn btn-primary" href="./contato.php" role="button">Voltar</a>
<?php 
require './footer.php';
?>

