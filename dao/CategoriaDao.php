<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . '/tp8/models/categoria.php');

class CategoriaDao {

    public static function ObtenerPorID($id) {
        //devuelve un objeto de tipo persona
		$categorias = array(); //creo un array de tipo Categoria(hacer un clase)

        //ME CONECTO CON LA BASE DE DATOS
        $MiBase = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");

        //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR.
        $query = 'SELECT * FROM Categorias WHERE Categorias.id=:id';

        // $query = 'SELECT * FROM usuarios where usuarios.email = :Mail AND usuarios.clave = :clave';
        
        //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.
        $Resultado = $MiBase->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);

        //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA
        $params = array(                                
            ":id" => $id         
        );
    
        $Resultado->execute($params);
            
        if ($Resultado->rowCount() > 0) {
            $Contador=0;
            while($row = $Resultado->fetch()) {
                $Objeto = new categoria();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
                $categorias[$Contador] =  $Objeto; 
                $Contador++;
            }

        }
        $MiBase = null;

        return $categorias;
    }// get

    public static function ObtenerTodos() {
        $categorias = array(); //creo un array de tipo Categoria(hacer un clase)

        //ME CONECTO CON LA BASE DE DATOS
        $MiBase = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");

        //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR.
        $query = 'SELECT * FROM Categorias';

        // $query = 'SELECT * FROM usuarios where usuarios.email = :Mail AND usuarios.clave = :clave';
        
        //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.
        $Resultado = $MiBase->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);

        //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA
    
        $Resultado->execute();
            
        if ($Resultado->rowCount() > 0) {
            $Contador=0;
            while($row = $Resultado->fetch()) {
                $Objeto = new categoria();
                $Objeto->id = $row["id"];
                $Objeto->nombre = $row["nombre"];
                $categorias[$Contador] =  $Objeto; 
                $Contador++;
            }

        }
        $MiBase = null;

        return $Objeto.id;

    }

    public static function nuevo($Nombre) {
        //aca va la logica para crear. Recibe por parametro un objeto de tipo persona
		 //hacer una query select que traiga todo;
   $categorias = array(); //creo un array de tipo Categoria(hacer un clase)

   //ME CONECTO CON LA BASE DE DATOS
   $MiBase = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");

   //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR.
   $query = 'INSERT INTO Categorias ("NombreCategoria") VALUES (":nombre") ';

   
   //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.
   $Resultado = $MiBase->prepare($query);
   $Resultado->setFetchMode(PDO::FETCH_ASSOC);

   //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA
   $params = array(                                
       ":nombre" => $Nombre         
   );

   $Resultado->execute($params);
       
   if ($Resultado->rowCount() > 0) {
       $Contador=0;
       while($row = $Resultado->fetch()) {
           $Objeto = new categoria();
           $Objeto->idCategoria = $row["id"];
           $Objeto->Nombre = $row["nombre"];
           $categorias[$Contador] =  $Objeto; 
           $Contador++;
       }

   }
   $MiBase = null;

   return $categorias;
    }// nuevo    

    public static function modificar($idCategoria, $Nombre) {
        //aca va la logica para modificar. Recibe por parametro un objeto de tipo persona
		 $categorias = array(); //creo un array de tipo Categoria(hacer un clase)

        //ME CONECTO CON LA BASE DE DATOS
        $MiBase = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");

        //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR.
        $query = 'UPDATE categorias SET categorias.nombre=:nombreWHERE categorias.id=:id';

        
        //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.
        $Resultado = $MiBase->prepare($query);
        $Resultado->setFetchMode(PDO::FETCH_ASSOC);

        //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA
        $params = array(                                
            ":id" => $idCategoria,
            ":nombre" => $Nombre           
        );
    
        $Resultado->execute($params);
            
        if ($Resultado->rowCount() > 0) {
            $Contador=0;
            while($row = $Resultado->fetch()) {
                $Objeto = new categoria();
                $Objeto->idCategoria = $row["id"];
                $Objeto->Nombre = $row["nombre"];
                $categorias[$Contador] =  $Objeto; 
                $Contador++;
            }

        }
        $MiBase = null;

        return $categorias;

    }// modificar

    public static function eliminar($id) {
        //aca va la logica para eliminar
		 $categorias = array(); //creo un array de tipo Categoria(hacer un clase)

    //ME CONECTO CON LA BASE DE DATOS
    $MiBase = new PDO("mysql:host=127.0.0.1;dbname=sistema", "root","");

    //EN UNA VARIABLE DEFINO LA QUERY QUE DESEO EJECUTAR.
    $query = 'DELETE FROM Categorias WHERE Categorias.id=:id';

    
    //LE DEFINO LA QUERY A MI OBJETO DE CONEXION.
    $Resultado = $MiBase->prepare($query);
    $Resultado->setFetchMode(PDO::FETCH_ASSOC);

    //CREO UN ARRAY CON PARAMETROS EN CASO DE QUE LA CONSULTA LOS REQUIERA
    $params = array(                                
        ":id" => $id          
    );

    $Resultado->execute($params);
        
    if ($Resultado->rowCount() > 0) {
        $Contador=0;
        while($row = $Resultado->fetch()) {
            $Objeto = new categoria();
            $Objeto->id = $row["idCategoria"];
            $Objeto->nombre = $row["nombre"];
            $categorias[$Contador] =  $Objeto; 
            $Contador++;
        }

    }
    $MiBase = null;

    return $categorias;

    
    }// eliminar

}

?>