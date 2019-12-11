<?php

echo('<pre>');
print_r($_POST);
echo('</pre>');

require('./includes/validadores.php');

//verificando se veio via post

if($_POST){

// testando se o nome é válido
if (nomeOk($_POST['nome'])){
	echo('Nome OK');
} else{
	echo('Escreva ao menos seu nome');
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<main class="container mt-5">
		<div class="row">
			<div class="col-6 offset-3">
				<form method="post">
				
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" required>
					</div>
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" required>
					</div>
					<div class="form-group">
						<label for="e-mail">E-mail</label>
						<input type="text" class="form-control" id="email" name="e-mail" required>
					</div>
					<div class="form-group">
						<label for="senha">senha</label>
						<input type="password" class="form-control" id="senha" name="senha" required>
					</div>
					<button class="btn btn-primary float-right mt-3" type="submit">Enviar</button>
				</form>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>