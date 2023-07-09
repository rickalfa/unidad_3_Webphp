<?php 
require_once('Model.php');
include_once('ConnDB.php');


class Producto extends Model{

    private $connDb;

    public function __construct(){

       $this->connDb  = new ConnBD();

    }


    function get($id = 0){

        if ($id == 0) {
            

            $sql = "SELECT * FROM producto";


        }else{

            $sql = "SELECT * FROM producto WHERE id=".$id;

           


        }
       
       $result = $this->connDb->exeQuery($sql);

    
       return $result;


    }
    function set($id, $dates = array()){

        if ($id != 0) {
            

           // print_r($dates);

            $sql = "UPDATE producto SET nombre='".$dates['nombre']."' precio='".$dates['precio']."' descripcion='".$dates['descripcion']."' WHERE id=".$id;


        }else{

        
            echo "Ingrese una Id Valida";

        }
       
        try {

            $this->connDb->exeQuery($sql);


        } catch (\Throwable $th) {
         
            $th->getMessage();

        }
    

        $this->connDb->closeDb();


    }


    function delete($id){

        if ($id != 0) {
            

            // print_r($dates);
 
             $sql = "DELETE FROM producto WHERE id=".$id;
 
 
         }else{
 
         
             echo "Ingrese una Id Valida";
 
         }
        
         try {
 
           $result = $this->connDb->exeQuery($sql);
 
 
         } catch (\Throwable $th) {
          
             $th->getMessage();

             $result = false;
 
         }
     
 
         $this->connDb->closeDb();

         return $result;


    }
    function create($dates = array()){

        $sql = "";

        if ($dates != null) {
            

           $sql = "INSERT INTO producto (nombre, precio, descripcion, tipo_producto)
           VALUES ('".$dates['nombre']."', '".$dates['precio']."', '".$dates['descripcion']."', '".$dates['tipo_producto']."')";
          
          print($sql);

        }else{

            echo " deben completar los datos ";    
        }

        try {
            
           $result = $this->connDb->exeQuery($sql);



        } catch (\Throwable $th) {


             $th->getMessage();

             $result = false;


        }

        $this->connDb->closeDb();


        return $result;


    }


}