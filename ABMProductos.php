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
		<div class="content">
   
	
	 <div class="card">
                                                    <div class="card-header">
                                                        <strong>Productos</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="ListadoProductos.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                               
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                      <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Enter Name" class="form-control"><small class="help-block form-text">Ingrese el Nombre</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Precio</label></div>
                                                                <div class="col-12 col-md-9"><input type="precio" id="precio" name="precio" placeholder="Enter Price" class="form-control"><small class="help-block form-text">Ingrese el precio</small></div>
                                                            </div>
															 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">codigo</label></div>
                                                                <div class="col-12 col-md-9"><input type="precio" id="precio" name="precio" placeholder="Enter Code" class="form-control"><small class="help-block form-text">Ingrese el codigo</small></div>
                                                            </div>
                                              
                                                         

															 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock Minimo</label></div>
                                                                <div class="col-12 col-md-9"><input type="precio" id="precio" name="precio" placeholder="Enter Price" class="form-control"><small class="help-block form-text">Ingrese el stock</small></div>
                                                            </div>
															 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stock Actual</label></div>
                                                                <div class="col-12 col-md-9"><input type="precio" id="precio" name="precio" placeholder="Enter Price" class="form-control"><small class="help-block form-text">Ingrese el stock</small></div>
                                                            </div>
															<div class="row form-group">
                                                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Categoria</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                                                            <option value="0">Seleccione Categoria</option>
                                                                            <option value="1">Sweater</option>
                                                                            <option value="2">Top</option>
                                                                            <option value="3">Jean</option>
                                                                            <option value="4">Short</option>
                                                                            <option value="5">Leggin</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
													 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Descripcion Corta</label></div>
                                                                <div class="col-12 col-md-9"><input type="precio" id="precio" name="precio" placeholder="Enter Description" class="form-control"><small class="help-block form-text">Ingrese la descripcion</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripcion Larga</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                                            </div>
															<div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Destacado</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check">
                                                                            <div class="radio">
                                                                                <label for="radio1" class="form-check-label ">
                                                                                    <input type="radio" id="BoolDestacado" name="Destacado" value="option1" class="form-check-input">Destacado
                                                                                </label>
                                                                            </div>
                                                                          
                                                              
                                                                        </div>
                                                                    </div>
                                                                </div>
																															<div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">On Sale</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check">
                                                                            <div class="radio">
                                                                                <label for="radio1" class="form-check-label ">
                                                                                    <input type="radio" id="BoolOnSale" name="onsale" value="option1" class="form-check-input">Descuento
                                                                                </label>
                                                                            </div>
                                                                          
                                                              
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            
                                                              
                                                              
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Imagen</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                                                </div>
                                                                
                                                        
                                                    </div>
													<form action="ListadoProductos.php">
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Aceptar
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
													</form>
                                                </div>
                                              </div>
	
	</body>
	
	