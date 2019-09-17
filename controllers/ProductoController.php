<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . '/dao/productoDAO.php');

$accion = (isset($_GET["accion"]) ? $_GET["accion"] : $_POST["accion"]);
	switch ($accion){
		
		case "insertar":
			$producto = new producto();
			$producto->IdProducto = $_POST['IdProducto'];
			$producto->NombreProducto = $_POST['NombreProducto'];
			$producto->CodigoProducto = $_POST['CodigoProducto'];
			$producto->Precio = $_POST['Precio'];
			$producto->Descuento = $_POST['Descuento'];
			$producto->StockMinimo = $_POST['StockMinimo'];
			$producto->StockActual = $_POST['StockActual'];
			$producto->IdCategoria = $_POST['IdCategoria'];
			$producto->NombreFoto = $_POST['NombreFoto'];
			$producto->DireccionFoto = $_POST['DireccionFoto'];
			$producto->NombreVideo = $_POST['NombreVideo'];
			$producto->DireccionVideo = $_POST['DireccionVideo'];
			$producto->DescripcionCorta = $_POST['DescripcionCorta'];
			$producto->DescripcionLarga = $_POST['DescripcionLarga'];
			$producto->Destacado = $_POST['Destacado'];
			$producto->OnSale = $_POST['OnSale'];
			$producto->MostrarHome = $_POST['MostrarHome'];
			$resultado = productoDAO::insertar($producto);
			echo json_encode($resultado);
			break;

		case "listar":
			$lista = productoDAO::ObtenerTodosLosProductos();
			echo json_encode($lista);
			break;		

		case "editar":
			$producto = new producto();
			$producto->IdProducto = $_POST['IdProducto'];
			$producto->NombreProducto = $_POST['NombreProducto'];
			$producto->CodigoProducto = $_POST['CodigoProducto'];
			$producto->Precio = $_POST['Precio'];
			$producto->Descuento = $_POST['Descuento'];
			$producto->StockMinimo = $_POST['StockMinimo'];
			$producto->StockActual = $_POST['StockActual'];
			$producto->IdCategoria = $_POST['IdCategoria'];
			$producto->NombreFoto = $_POST['NombreFoto'];
			$producto->DireccionFoto = $_POST['DireccionFoto'];
			$producto->NombreVideo = $_POST['NombreVideo'];
			$producto->DireccionVideo = $_POST['DireccionVideo'];
			$producto->DescripcionCorta = $_POST['DescripcionCorta'];
			$producto->DescripcionLarga = $_POST['DescripcionLarga'];
			$producto->Destacado = $_POST['Destacado'];
			$producto->OnSale = $_POST['OnSale'];
			$producto->MostrarHome = $_POST['MostrarHome'];
			$resultado = productoDAO::insertar($producto);
			echo json_encode($resultado);
			break;

		case "buscarPorId":
			$id = $_POST["id"];
			$resultado = productoDAO::ObtenerProductoPorId($id);
			echo json_encode($resultado);
			break;

		case "eliminar":
			$id = $_POST["idProducto"];
			$resultado = productoDAO::eliminar($id);
			echo json_encode($resultado);
			break;
}
?>