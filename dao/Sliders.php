<?php 

include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/model/Slider.php');


class Sliders {
    public static function ObtenerPorId($id){

        $objSlider = new slider();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'SELECT * FROM slider WHERE slider.id=:id';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id            
        );
        $Resultado->execute($params);
        if ($Resultado->rowCount() > 0) {
            $cont=0;

            while($row = $Resultado->fetch()) {
                $objSlider->id = $row["id"];
                $objSlider->nombre = $row["nombre"];
				$objSlider->foto = $row["foto"];
                $cont++;
            }
        }
        $BD = null;
        return $objSlider;
	}
	 public static function ObtenerTodos(){        
        $arrSlider = array(); 
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'SELECT * FROM slider';

        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $Resultado->execute();
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $Obj = new slider();
                $Obj->id = $row["id"];
                $Obj->nombre = $row["nombre"];
				$Obj->foto = $row["foto"];
                $arrSlider[$cont] =  $Obj; 
                $cont++;
            }
        }
        $BD = null;
        return $arrSlider;
    }
	public static function Agregar($nombre, $foto){
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'INSERT INTO slider (nombre, foto) VALUES (:nombre,:foto) ';

        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":nombre" => $nombre,    
			":foto" => $foto    			
        );
        $Resultado->execute($params);

		$Obj= new slider();
		$Obj->nombre = $nombre;
        $Obj->foto = $foto;
        
		$ult_id=$BD->lastInsertId();
		$Obj->id=$ult_id;
		return $Obj;
    }
	
	public static function Modificar($item){
        $arrSlider = array();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'UPDATE slider SET slider.nombre=:nombre,slider.foto=:foto WHERE slider.id=:id';    
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);     
        $params = array(                                
            ":id" => $item->id,
            ":nombre" => $item->nombre, 
			":foto" => $item->foto			
        );   
        $Resultado->execute($params);           
        $BD = null;
    }
	   public static function Eliminar($id){
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'DELETE FROM slider WHERE slider.id=:id';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id
        );
        $Resultado->execute($params);
   }
}
?>