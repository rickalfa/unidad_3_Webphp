<?php 
require_once('Model.php');
include_once('ConnDB.php');


class Perfil extends Model{

    private $connDb;

    public function __construct(){

       $this->connDb  = new ConnBD();

    }


    function get($id = 0){

        if ($id == 0) {
            

            $sql = "SELECT * FROM perfil";


        }else{

            $sql = "SELECT * FROM perfil WHERE id=".$id;

           


        }
       
       $result = $this->connDb->exeQuery($sql);

    
       return $result;


    }
    function set($id, $dates = array()){

        if ($id != 0) {
            

           // print_r($dates);

            $sql = "UPDATE perfil SET nombre='".$dates['nombre']."' precio='".$dates['precio']."' descripcion='".$dates['descripcion']."' WHERE id=".$id;


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
 
             $sql = "DELETE FROM perfil WHERE id=".$id;
 
 
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
            

           $sql = "INSERT INTO perfil (codigo, descripcion)
           VALUES ('".$dates['codigo']."','".$dates['descripcion']."')";
          
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