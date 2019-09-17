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
        <div class="card-header"><strong>Editar Categoria</strong></div>
		<input type="hidden" name="accion" id="accion" value="editar">
        <div class="card-body card-block">
            <div class="form-group">
                <label for="company" class=" form-control-label">Nombre</label>
                <input type="text" id="company" placeholder="ACA DEBERIA ESTAR EL NOMBRE DE LA CATEGORIA A MODIFICAR" class="form-control">
            </div>  
        </div>
        <button type="button" onclick="EditarCat(); "class="btn btn-secondary">Editar</button>  
    </div>
	</form>
	<script>
	
    function EditarCat() {                      
		
		$.ajax({
            async:true,
            type: "POST",
            url: "controllers/CategoriaController.php",                    
       
			data:$('#formulario').serialize(),
            beforeSend:function(){
                alert('comienzo a procesar');
            },
            success:function(resultado) {
             alert(resultado);
			 window.location="ABMCategorias.php";                      
               
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

