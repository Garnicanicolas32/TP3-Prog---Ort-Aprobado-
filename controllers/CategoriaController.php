<?php 

include_once ($_SERVER["DOCUMENT_ROOT"] . '/tp7/dao/Categorias.php');

if(isset($_POST['accion'])){
    $accion=$_POST['accion'];
   
    switch ($accion) {
        
        case 'nuevo':
            if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $item = new categoria();
                $item->nombre = $nombre;
                $resultado = Categorias::Agregar($item);
                echo json_encode($resultado);
            }else{
                echo json_encode("error");
            }            
            break;

        case 'listar':		
            $resultado = Categorias::ObtenerTodos();			
            echo json_encode($resultado);
            break;

        case 'obtenerporid':
            if(isset($_GET['id'])){
                $id =$_GET['id'];
                $resultado = Categorias::ObtenerPorId($id);
                echo json_encode($resultado);
            }else{
                echo json_encode("Error, id nulo");
            }		
            break;

        case 'modificar':
             $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
			 $id = isset($_POST['id']) ? $_POST['id'] : '';
			 var_dump($nombre);
             var_dump($id);
             Categorias::Modificar($id,$nombre);
            break;

        case 'eliminar':
            if(isset($_GET['id'])){
				$id=$_GET['id'];
                var_dump($id);
				Categorias::Eliminar($id);				
                echo json_encode("Exito");
            }else{
                echo json_encode("Error");
            }
            break;
    }
}else{
    echo json_encode("Error");
}
?>