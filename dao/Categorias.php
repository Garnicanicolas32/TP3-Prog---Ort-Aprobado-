<?php 
include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/model/Categoria.php');


class Categorias {
    public static function ObtenerPorId($id){
        $ObjetoCat = new categoria();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'SELECT * FROM categorias WHERE categorias.id=:id';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id            
        );
        $Resultado->execute($params);
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $ObjetoCat->id = $row["id"];
                $ObjetoCat->nombre = $row["nombre"];
                $cont++;
            }
        }
        $BD = null;
        return $ObjetoCat;
    }

    public static function ObtenerTodos(){
        $ArrayCat = array();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'SELECT * FROM categorias';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $Resultado->execute();
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $Objeto = new categoria();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
                $ArrayCat[$cont] =  $Objeto; 
                $cont++;
            }
        }
        $BD = null;
        return $ArrayCat;
    }

    public static function Agregar($item){
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'INSERT INTO categorias (nombre) VALUES (:nombre) ';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":nombre" => $item->nombre
		);
        $Resultado->execute($params);
		$ult_id=$BD->lastInsertId();
		$item->id=$ult_id;
		return $item;
    }

    public static function Modificar($id,$nombre){
        $ArrayCat = array();
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'UPDATE categorias SET categorias.nombre = :nombre WHERE categorias.id = :id'; 

        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);     

        $params = array(                                
            ":id" => $id,
            ":nombre" => $nombre           
        );   

        $Resultado->execute($params);           
        if ($Resultado->rowCount() > 0) {
            $cont=0;
            while($row = $Resultado->fetch()) {
                $Objeto = new categoria();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
                $ArrayCat[$cont] =  $Objeto; 
                $cont++;
            }
        }
        $BD = null;
        return $ArrayCat;
	}
    
    public static function Eliminar($id){
        $BD = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $Query = 'DELETE FROM categorias WHERE categorias.id = :id';
        $Resultado = $BD->prepare($Query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id
        );
        $Resultado->execute($params);
   }
}

?>