<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Essential metadatas -->
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" href="assets/logo.png"/>

	<!-- Style -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>
	<link rel="stylesheet" href="style/style.css"/>

	<title>Lista de tarefas</title>
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a href="#" class="navbar-brand">
				App Lista de Tarefas
				<img src="assets/logo.png" alt="Site logo" class="d-inline-block align-top">
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas Pendentes</a></li>
					<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Nova Tarefa</h4>
							<hr>

							<form action="">
								<div class="form-group">
									<label for="">Descrição da tarefa:</label>
									<input type="text" class="form-control" placeholder="Exemplo: Lavar o carro" name=""/>

									<button class="btn btn-success">Cadastrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>