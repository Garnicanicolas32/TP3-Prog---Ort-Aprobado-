<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Dashboard</title>
    
    <link rel="stylesheet" type="text/css" href="CSS/EstilosPlantilla.css">
  

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/EstilosGeneral.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <script src="https://kit.fontawesome.com/20e6b407f6.js"></script>
</head>
<body>
    <!--Menu de nav-->
    <?php 
        include_once("components/BarraNavegacionBack.php"); 
    ?> 
	    <?php 
        include_once("components/IncludeHeader.php"); 
    ?> 
    
    <!--Nuevos ingresos-->
    

    <!--Articulos en venta-->
    <div class="card col-lg-3 col-md-3 no-padding no-shadow">
        <div class="card-body bg-flat-color-3">
            <div class="h1 text-right mb-4">
                <i class="fa fa-cart-plus text-light"></i>
            </div>
            <div class="h4 mb-0 text-light">
                <span class="count">1238</span>
            </div>
            <small class="text-light text-uppercase font-weight-bold">Products sold</small>
            <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
        </div>
    </div>

    <!--Nuevos Compradores-->
    <div class="card col-lg-3 col-md-3 no-padding no-shadow">
        <div class="card-body bg-flat-color-2">
            <div class="h1 text-muted text-right mb-4">
                <i class="fa fa-user-plus text-light"></i>
            </div>
            <div class="h4 mb-0 text-light">
                <span class="count">385</span>
            </div>
            <small class="text-uppercase font-weight-bold text-light">New Clients</small>
            <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
        </div>
    </div>

     <!--Dato random 4-->
    <div class="card col-lg-3 col-md-3 no-padding no-shadow">
        <div class="card-body bg-flat-color-4">
            <div class="h1 text-light text-right mb-4">
                <i class="fa fa-clock-o"></i>
            </div>
            <div class="h4 mb-0 text-light">5:34:11</div>
            <small class="text-light text-uppercase font-weight-bold">Avg. Time</small>
            <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
        </div>
    </div>  
         
</body>
</html>

