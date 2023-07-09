
<?php 


class ConnBD {

    
     private $mysqli;
     
    public function __construct(){


        echo 'clase llamada '. __CLASS__;

        try {
           
             
            $this->mysqli = new mysqli("127.0.0.1", "root", "", "tiendamm", 3306);

            if ($this->mysqli->connect_errno) {
                  echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
            }
 
        
        } catch (\Throwable $th) {
          
            $th->getMessage();

        }


    }




    public function exeQuery($sql){

        try {
            
          
            $result = $this->mysqli->query($sql);



           var_dump($result);

            //print_r($result->fetch_assoc());

        

        } catch (\Throwable $th) {

            $th->getMessage();

            $result = false;


        }
        
        
        return $result;

    }




    public function closeDb(){


        $this->mysqli->close();

    }




}