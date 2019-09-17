<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tp7/dao/Sliders.php');
$id = 0;

if (isset($_GET['id'])){
    $id=$_GET['id'];
}
if($id>0)
{
	$accion="modificar";
	$resultado = Sliders::ObtenerPorId($id);	
}
else
{
	$accion="insertar";
	$resultado=new slider();
}
?>

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
    	<form name="formulario" id="formulario">
    <div class="col-lg-7 Formulario">
    <div class="card">
        <div class="card-header"><strong>Agregar Slider</strong></div>
        <div class="card-body card-block">
            <div class="form-group">
					<input type="hidden" name="accion" id="accion" value="<?php echo $accion; ?>">
			<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                <label for="company" class=" form-control-label">Imagen</label>
                <input type="text" name="foto" id="foto" placeholder="Ingrese la imagen" class="form-control" value="<?php echo $resultado->foto; ?>">
                <label for="company" class=" form-control-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del slider" class="form-control" value="<?php echo $resultado->nombre; ?>" >
            </div>  
        </div>
      <button type="button" onclick="Agregar(); "class="btn btn-secondary">Agregar</button>  
    </div>
</form>

	<script src="vendors/jquery/dist/jquery.min.js"></script>
	<script src="vendors/popper.js/dist/umd/popper.min.js"></script>	
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	
	
	<script>
	
    function Agregar() {                      
		
		$.ajax({
            async:true,
            type: "POST",
            url: "controllers/SliderController.php",                    
       
			data:$('#formulario').serialize(),
            beforeSend:function(){
            alert('comienzo a procesar');
            },
            success:function(resultado) {
             alert(resultado);
			 window.location="ABMSlider.php";                      
               
                return true;
            },
            timeout:8000,
            error:function(){
                alert('mensaje de error');
                return false;
            }
        });
	}		
        
 
    </script>
	
         
</body>
</html>

