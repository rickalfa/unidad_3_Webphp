<?php 
require_once('Model.php');
include_once('ConnDB.php');


class Cliente extends Model{

    private $connDb;

    public function __construct(){

       $this->connDb  = new ConnBD();

    }

    public function loginUser($nombre, $pass){

        if ($nombre == 0 || $pass == null) {
            

            $sql = "SELECT * FROM usuario";


        }else{

            $sql = "SELECT * FROM usuario WHERE nombre=".$nombre. "";



        }
       
        try {
      

            $result = $this->connDb->exeQuery($sql);

         
    

        } catch (\Throwable $th) {

           $th->getMessage();

           $result = false;



        }
      
       return $result;



    }

    function get($id = 0){

        if ($id == 0) {
            

            $sql = "SELECT * FROM usuario";


        }else{

            $sql = "SELECT * FROM usuario WHERE id=".$id;



        }
       
       $result = $this->connDb->exeQuery($sql);

    
       return $result;


    }
    function set($id, $dates = array()){

        if ($id != 0) {
            

           // print_r($dates);

            $sql = "UPDATE usuario SET nombre='".$dates['nombre']."' rol='".$dates['rol']."' WHERE id=".$id;


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
 
             $sql = "DELETE FROM usuario WHERE id=".$id;
 
 
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
            

           $sql = "INSERT INTO usuario (nombre, rol, email, password)
           VALUES ('".$dates['nombre']."', '".$dates['rol']."', '".$dates['email']."', '".$dates['password']."')";
          
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