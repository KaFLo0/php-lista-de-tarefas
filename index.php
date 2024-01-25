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
					<li class="list-group-item active"><a href="#">Tarefas Pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Tarefas pendentes</h4>
							<hr>

							<div class="row mb-3 d-flex align-items-center tarefa">
								<div class="col-sm-9">Lavar o carro</div>
								<div class="col-sm-3 mt-2 d-flex justify-content-between">
									<i class="fas fa-trash-alt fa-lg text-danger"></i>
									<i class="fas fa-edit fa-lg text-info"></i>
									<i class="fas fa-check-square fa-lg text-success"></i>
								</div>
							</div>

							<div class="row mb-3 d-flex align-items-center tarefa">
								<div class="col-sm-9">Passear com o cachorro</div>
								<div class="col-sm-3 mt-2 d-flex justify-content-between">
									<i class="fas fa-trash-alt fa-lg text-danger"></i>
									<i class="fas fa-edit fa-lg text-info"></i>
									<i class="fas fa-check-square fa-lg text-success"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>