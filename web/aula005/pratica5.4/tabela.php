<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
		if(isset($_GET['linhas']) && isset($_GET['colunas'])) {
			$linhas = $_GET['linhas'];
			$colunas = $_GET['colunas'];
		} else {
			$linhas = 3;
			$colunas = 3;
		}
	?>

	<div class="container mt-5">
		<h1>Tabela Dinâmica</h1>
		<form method="GET">
			<div class="form-group">
				<label for="linhas">Número de Linhas:</label>
				<input type="number" name="linhas" class="form-control" id="linhas" value="<?php echo $linhas; ?>">
			</div>
			<div class="form-group">
				<label for="colunas">Número de Colunas:</label>
				<input type="number" name="colunas" class="form-control" id="colunas" value="<?php echo $colunas; ?>">
			</div>
            <label for="cor">Cor da tabela:</label>
            <select id="cor" name="cor">
                <option value="table-primary">Azul</option>
                <option value="table-success">Verde</option>
                <option value="table-danger">Vermelho</option>
                <option value="table-warning">Amarelo</option>
                <option value="table-dark">Preto</option>
            </select><br><br>
			<button type="submit" class="btn btn-primary">Criar Tabela</button>
		</form>
		<br>
		<table class="table table-bordered">
			<?php for($i = 0; $i < $linhas; $i++): ?>
				<tr>
					<?php for($j = 0; $j < $colunas; $j++): ?>
						<td></td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
</body>
</html>