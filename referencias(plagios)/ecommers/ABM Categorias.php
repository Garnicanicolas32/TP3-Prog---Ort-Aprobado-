<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ABM Categorias</title>
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
							<strong>Nueva categoria</strong>
							</div>
							<div class="card-body card-block">
					   <form action="" method="post" class="form-inline">
							  <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="nombre" required="" class="form-control"></div>
					   </form>
					   </div>
					  <div class="card-footer">
					  <button type="submit" class="btn btn-primary btn-sm">
						 <i class="fa fa-dot-circle-o"></i> Submit
					  </button>
					  <button type="reset" class="btn btn-danger btn-sm">
					   <i class="fa fa-ban"></i> Reset
					 </button>
					
				 </div>
			 </div>
		</div>
		<?php
		include_once 'script.php'; 
		?>
	</body>
 </html>