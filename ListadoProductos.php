<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->





    <!-- Left Panel -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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
include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/components/BarraNavegacionBack.php');
include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/components/IncludeHeader.php');
?>
	<form action="ABMProductos.php">
		<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de Productos</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Descuento</th>
                                            <th scope="col">Stock Minimo</th>
                                            <th scope="col">Stock Actual</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Descripcion corta</th>
                                            <th scope="col">Descripcion larga</th>
                                            <th scope="col">Destacado</th>
                                            <th scope="col">On Sale</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>turtleneck sweater</td>
                                            <td>900</td>
                                            <td>100</td>
											<td>50</td>
                                            <td>900</td>
                                            <td>Sweater</td>
											<td>ingrese imagen</td>
                                            <td>lindo</td>
                                            <td>muy lindo</td>
											<td>true</td>
                                            <td>false</td>
                                         
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>turtleneck sweater</td>
                                            <td>900</td>
                                            <td>100</td>
											<td>50</td>
                                            <td>900</td>
                                            <td>Sweater</td>
											<td>ingrese imagen</td>
                                            <td>lindo</td>
                                            <td>muy lindo</td>
											<td>true</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                             <td>turtleneck sweater</td>
                                            <td>900</td>
                                            <td>100</td>
											<td>50</td>
                                            <td>900</td>
                                            <td>Sweater</td>
											<td>ingrese imagen</td>
                                            <td>lindo</td>
                                            <td>muy lindo</td>
											<td>true</td>
                                            <td>false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
				
					  <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Agregar Producto
                                                        </button>
                                                        
                                                    </div>
													</form>
		</body>