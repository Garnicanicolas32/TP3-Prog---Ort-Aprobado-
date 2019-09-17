<?php
include_once($_SERVER["DOCUMENT_ROOT"]. '/tp7/model/Usuario.php');

class Usuarios{
	public static function ObtenerPorId($id){
        $objUser = new usuario();
        $BaseDeDatos = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'SELECT * FROM usuarios WHERE usuarios.id=:id';
        $Resul = $BaseDeDatos->prepare($query);
        $Resul->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id            
        );
    
        $Resul->execute($params);
            
        if ($Resul->rowCount() > 0) {
            $cont=0;
            while($row = $Resul->fetch()) {
                $objUser->id = $row["id"];
                $objUser->nombre = $row["nombre"];
				$objUser->clave = $row["clave"];
                $objUser->mail = $row["mail"];
				$cont++;
            }
        }
        $BaseDeDatos = null;
        return $objUser;
	}
	
	public static function ObtenerTodos(){
        
        $arrUser = array(); 
        $BaseDeDatos = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'SELECT * FROM usuarios';
        $Resul = $BaseDeDatos->prepare($query);
        $Resul->setFetchMode(PDO::FETCH_ASSOC);
        $Resul->execute();
            
        if ($Resul->rowCount() > 0) {
            $cont=0;
            while($row = $Resul->fetch()) {
                $Objeto = new usuario();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
				$Objeto->clave = $row["clave"];
				$Objeto->mail = $row["mail"];
                $arrUser[$cont] =  $Objeto; 
                $cont++;
            }
        }
        $BaseDeDatos = null;
        return $arrUser;
    }
	
	public static function Agregar($nombre, $clave, $mail){
        $BaseDeDatos = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'INSERT INTO usuarios (nombre, clave, mail) VALUES (:nombre,:clave,:mail) ';
        $Resul = $BaseDeDatos->prepare($query);
        $Resul->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":nombre" => $nombre,
			":clave" => $clave,
			":mail" => $mail    			
        );
        $Resul->execute($params);
    }
	
	public static function Modificar($id, $nombre, $clave, $mail){
       
        $arrUser = array();
        $BaseDeDatos = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'UPDATE usuarios SET usuarios.nombre=:nombre and usuarios.mail=:mail and usuarios.clave=:clave WHERE usuarios.id=:id';    
        $Resul = $BaseDeDatos->prepare($query);
        $Resul->setFetchMode(PDO::FETCH_ASSOC);     
        $params = array(                                
            ":id" => $id,
            ":nombre" => $nombre, 
			":mail" => $mail,			
			":clave" => $clave
		);   
        $Resul->execute($params);           
        if ($Resul->rowCount() > 0) {
            $cont=0;
            while($row = $Resul->fetch()) {
                $Objeto = new usuario();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
				$Objeto->mail = $row["mail"];
				$Objeto->clave = $row["clave"];
                $arrUser[$cont] = $Objeto; 
                $cont++;
            }
        }
        $BaseDeDatos = null;
        return $arrUser;
    }
	
	   public static function Eliminar($id){
        $BaseDeDatos = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");
        $query = 'DELETE FROM usuarios WHERE usuarios.id=:id';
        $Resul = $BaseDeDatos->prepare($query);
        $Resul->setFetchMode(PDO::FETCH_ASSOC);
        $params = array(                                
            ":id" => $id
        );
        $Resul->execute($params);
   }
	
	
	
	
	
}
	
?>