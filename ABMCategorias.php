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
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Categorias</strong>
                          <form name="formulario" id="formulario">  <a href="AgregarCategoria">
							
							<input type="hidden" name="accion" id="accion" value="eliminar">
                             </form>   <button type="button" class="btn btn-secondary BotonAgregarAbm">Agregar</button>
                            </a> 
							
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
	<script src="vendors/jquery/dist/jquery.min.js"></script>
	<script src="vendors/popper.js/dist/umd/popper.min.js"></script>	
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	
	<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script>
    (function ($) {                
        $.ajax({
            async:true,
            type: "POST",
            url: "controllers/CategoriaController.php",                    
            data:"accion=listar",
            beforeSend:function(){
                //alert('comienzo a procesar');
            },
            success:function(resultado) {                
				alert(resultado);
				var o = JSON.parse(resultado);//A la variable le asigno el json decodificado                
                
                $('#bootstrap-data-table-export').DataTable( {
                    data : o,
                    columns: [
                        {data : "id", title : "Id"},
                        {data : "nombre", title: "Nombre"},
                        {
                            data: null,
                            title: 'Acciones',
                            className: "text-center",                            
                            render: function (data){
                                return '<a href="javascript:editar('+ data.id +');">Editar</a><a href="javascript:eliminar('+ data.id +');">Eliminar</a>';
                            }
                        }                        
                    ],
                });
                return true;
            },
            timeout:8000,
            error:function(){
                alert('mensaje de error');
                return false;
            }
        });        
        
        
    })(jQuery);
	
	function editar(id){
		window.location="AgregarCategoria.php?id="+id;
		
		
	}
	function eliminar(id){
				$.ajax({
            async:true,
            type: "POST",
            url: "controllers/CategoriaController.php?id="+id,                    
       
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