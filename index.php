<?php 

include('models/ConnDB.php');
include_once('models/Cliente.php');

//require_once('viewsAdmin/index.php');
header('Location: proyectoweb/Login.html');

 $Cliente = new Cliente();


echo '</br>';

$result2 = $Cliente->get(0);

print_r($result2->fetch_array());

echo '</br> peticon de un solo resultado ';



$result1 = $Cliente->get(1);

while($row = $result1->fetch_assoc()){

    echo "<br> id : ". $row['id']. " nombre : ".$row['nombre'];
    

}

echo '</br>';


//** Creacion de Usuario*/

$dates_user = array("nombre"=>"pedro", "rol"=>"vendedor", "email"=>"email@nuevio.es", "password"=>"12345");



//$Cliente->create($dates_user);


//print($result_delete);

//while($row = $result2->fetch_assoc()){
//
//    echo "<br> id : ". $row['id']. " nombre : ".$row['nombre'];
//
//
//}