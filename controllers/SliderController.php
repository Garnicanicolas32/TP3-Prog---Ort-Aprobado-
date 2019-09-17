<?php

	include_once ($_SERVER["DOCUMENT_ROOT"] . '/tp7/dao/Sliders.php');
	
	if(isset($_POST['accion'])){
    $accion=$_POST['accion'];
	switch ($accion){

		case "insertar":
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
			$foto = isset($_POST['foto']) ? $_POST['foto'] : '';
			$send = Sliders::Agregar($nombre, $foto);
			echo json_encode($send);
			break;

		case "obtenerTodos":
			$List = Sliders::ObtenerTodos();
			echo json_encode($List);
			break;

		case "modificar":
			 $id = isset($_POST['id']) ? $_POST['id'] : '';
			 $item=Sliders::ObtenerPorId($id);
			 $item->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
			 $item->foto = isset($_POST['foto']) ? $_POST['foto'] : '';		
			Sliders::Modificar($item);			
			echo json_encode($item);
			break;

		case "buscarPorId":
			$id = $_POST["id"];
			$send = Sliders::ObtenerPorId($id);
			echo $send;
			break;

		case "eliminar":
			$id = $_GET["id"];
			$send = Sliders::Eliminar($id);
			return $send;
			break;
	}
	}
	else{
    echo json_encode("Error");
	}
	
?>