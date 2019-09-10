<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lista categorias</title>
		<meta name="description" content="Sufee Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-icon.png">
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
		<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
		<link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
		<link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


		<link rel="stylesheet" href="assets/css/style.css">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	</head>
	<body>
	<?php
		include_once 'left panel.php'; 
		?>
		<div id="right-panel" class="right-panel">
		<?php
		include_once'header.php';
		include_once'breadcrumbs.php';
		?>
		<div class="card">
			<div class="card-header">
				<strong class="card-title">Table Head</strong>
				<button type="button" class="btn btn-outline-success ">Agregar</button>
			</div>
			<div class="card-body">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nombre</th>
							<th ></th>
							<th ></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td align="right"><button type="button" class="btn btn-outline-secondary" >Modificar</button></td>
							<td ><button type="button" class="btn btn-outline-danger">Eliminar</button></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td align="right"><button type="button" class="btn btn-outline-secondary">Modificar</button></td>
							<td><button type="button" class="btn btn-outline-danger">Eliminar</button></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td align="right"><button type="button" class="btn btn-outline-secondary">Modificar</button></td>
							<td ><button type="button" class="btn btn-outline-danger">Eliminar</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<?php
		include_once 'script.php'; 
		?>
	</body>
</html>