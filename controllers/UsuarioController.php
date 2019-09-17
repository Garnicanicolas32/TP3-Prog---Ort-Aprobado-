<?php

	include_once ($_SERVER["DOCUMENT_ROOT"] . '/tp7/dao/Usuarios.php');


	if(isset($_POST['accion'])){
	$accion=$_POST['accion'];
	
	switch ($accion){
		
		case "insertar":
			$item = new usuario();
			$item->NombreUsuario = $_POST["nombreusuario"];
			$item->ApellidoUsuario = $_POST["apellidousuario"];
			$item->Mail = $_POST["mail"];
			$item->Contraseña = $_POST["contraseña"];
			$newid = usuarioDAO::insertar($item);
			$item->IdUsuario = $newid;
			echo json_encode($item);
			break;
		case "obtenerTodos":
			$list = Usuarios::ObtenerTodos();
			echo json_encode($list);
			break;
			
		case "buscarPorId":
			$id = $_POST["id"];
			$resultado = usuarioDAO::Existe($id);
			echo $resultado;
			break;

		case "editar":
			$item = new usuario();
			$item->IdUsuario = $_POST["idusuario"];
			$item->Mail = $_POST["mail"];
			$item->Contraseña = $_POST["contraseña"];
			$item->NombreUsuario = $_POST["nombreusuario"];
			$item->ApellidoUsuario = $_POST["apellidousuario"];
			
			$resultado = usuarioDAO::editar($item);
			echo $resultado;
			break;

		case "eliminar":
			$id = $_POST["idusuario"];
			$resultado = usuarioDAO::eliminar($id);
			echo $resultado;
			break;

		
	}
}
	else{
    echo json_encode("error");
	}
	
?>