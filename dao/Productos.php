<?php
include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/model/Producto.php');

class Productos{
	public static function ObtenerPorId($id){
        $producto = new producto();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'SELECT * FROM productos WHERE productos.id=:id';
        $Resultado = $BD->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id            
        );    
        $Resultado->execute($params);
          
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $producto->id = $row["id"];
                $producto->nombre = $row["nombre"];
				$producto->codigo = $row["codigo"];
                $producto->precio = $row["precio"];
                $producto->video= $row["video"];                
                $producto->desclarga = $row["desclarga"];
				$producto->destacado = $row["destacado"];
                $producto->onsale = $row["onsale"];
				$producto->desccorta = $row["desccorta"];
                $producto->descuento = $row["descuento"];
                $producto->stockmin = $row["stockmin"];
				$producto->stockactual = $row["stockactual"];
                $producto->categoria = $row["categoria"];
				$producto->foto = $row["foto"];
				$producto->mostrar = $row["mostrar"];
				$cont++;
            }
        }
        $BD = null;
        return $producto;
	}
	
	public static function ObtenerTodos(){        
        $arrProd = array(); 
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'SELECT * FROM productos';
        $Resultado = $BD->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $Resultado->execute();
            
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $producto->id = $row["id"];
                $producto->nombre = $row["nombre"];
				$producto->codigo = $row["codigo"];
                $producto->precio = $row["precio"];
                $producto->video= $row["video"];                
                $producto->desclarga = $row["desclarga"];
				$producto->destacado = $row["destacado"];
                $producto->onsale = $row["onsale"];
				$producto->desccorta = $row["desccorta"];
                $producto->descuento = $row["descuento"];
                $producto->stockmin = $row["stockmin"];
				$producto->stockactual = $row["stockactual"];
                $producto->categoria = $row["categoria"];
				$producto->foto = $row["foto"];
				$producto->mostrar = $row["mostrar"];
                $arrProd[$cont] =  $producto; 
                $cont++;
            }
        }
        $BD = null;
        return $arrUser;
    }
	
	public static function Agregar($nombre, $codigo, $precio, $descuento, $stockmin, $stockactual, $categoria, $foto, $video, $desccorta, $desclarga, $destacado, $onsale, $mostrar)
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'INSERT INTO productos (nombre, codigo, precio, descuento, stockmin, stockactual, categoria, foto, video, desccorta, desclarga, destacado, onsale, mostrar) VALUES (:nombre,:codigo,:precio,:descuento,:stockmin,:stockactual,:categoria,:foto,:video,:desccorta,:desclarga,:onsale,:mostrar ) ';
        $Resultado = $BD->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                 
		   ":nombre" => $nombre,
			":codigo" => $codigo,
			":precio" => $precio,
			":descuento" => $descuento,
            ":stockmin" => $stockmin,
            ":foto" => $foto, 
			":video" => $video,
			":desccorta" => $desccorta,
			":desclarga" => $desclarga,
			":destacado" => $destacado,
			":onsale" => $onsale,
			":mostrar" => $mostrar, 
			":stockactual" => $stockactual, 
			":categoria" => $categoria,
			
        );
        $Resultado->execute($params);
    }
	
	public static function Modificar($id, $nombre, $codigo, $precio, $descuento, $stockmin, $stockactual, $categoria, $foto, $video, $desccorta, $desclarga, $destacado, $onsale, $mostrar){
       
        $arrUser = array();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Resultado = $BD->prepare($query);
        $query = 'UPDATE productos SET productos.nombre=:nombre and productos.codigo=:codigo and productos.precio=:precio and productos.descuento=:descuento and productos.stockmin=:stockmin and productos.stockactual=:stockactual and productos.categoria=:categoria and productos.foto=:foto and productos.video=:video and productos.desccorta=:desccorta and productos.desclarga=:desclarga and productos.onsale=:onsale and productos.mostrar=:mostrar WHERE productos.id=:id';    
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);     
        $params = array( 
			":id" => $id,		
			":nombre" => $nombre,
			":codigo" => $codigo,
			":precio" => $precio,
			":descuento" => $descuento,
			":stockmin" => $stockmin, 
			":stockactual" => $stockactual, 
			":categoria" => $categoria, 
			":foto" => $foto, 
			":video" => $video,
			":desccorta" => $desccorta,
			":desclarga" => $desclarga,
			":destacado" => $destacado,
			":onsale" => $onsale,
			":mostrar" => $mostrar
		);   
        $Resultado->execute($params);           
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $producto->id = $row["id"];
                $producto->nombre = $row["nombre"];
				$producto->codigo = $row["codigo"];
                $producto->precio = $row["precio"];
				$producto->descuento = $row["descuento"];
                $producto->stockmin = $row["stockmin"];
				$producto->stockactual = $row["stockactual"];
                $producto->categoria = $row["categoria"];
				$producto->foto = $row["foto"];
                $producto->video= $row["video"];
				$producto->desccorta = $row["desccorta"];
                $producto->desclarga = $row["desclarga"];
				$producto->destacado = $row["destacado"];
                $producto->onsale = $row["onsale"];
				$producto->mostrar = $row["mostrar"];
                $arrProd[$cont] =  $producto; 
                $cont++;
            }
        }
        $BD = null;
        return $arrUser;
    }
	
	   public static function Eliminar($id){
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'DELETE FROM productos WHERE productos.id=:id';
        $Resultado = $BD->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id
        );
        $Resultado->execute($params);
   }		
}	
?>