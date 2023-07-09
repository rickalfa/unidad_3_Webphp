<?php  

require_once('index.php');
require('../models/Producto.php');

?>

<h1> Productos </h1>

<!-- Button trigger modal -->
          
     
      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modelId">
                       Create Producto
      </button>  <p>Creacion de productos </p>
   
       <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>accion</th>
        <th> nombre </th>
        <th>precio</th>
        <th>descripcion</th>
        <th>tipo producto</th>
        
      </tr>
    </thead>
    <tbody>
        <?php

          $productos = new Producto();

          $result_productos = $productos->get(0);

          while($row = $result_productos->fetch_assoc()){



             echo ' <tr>
                <td> 
                     <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modelId">
                        Delete
                     </button>   

                     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                       Update
                    </button> 

                 </td>
                <td>"'.$row['nombre'] .'"</td>
                <td>"'.$row['precio'] .'"</td>
                <td>"'.$row['descripcion'] .'"</td>
                <td>"'.$row['tipo_producto'] .'"</td>
                
              </tr>';
   
          }

      ?>
    </tbody>
  </table>
</div>


       <!-- Modal -->       

       <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                       <div class="modal-header">
                               <h5 class="modal-title">Modal title</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                           </div>
                   <div class="modal-body">
                       <div class="container-fluid">
                           Add rows here
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Save</button>
                   </div>
               </div>
           </div>
       </div>




</div>





</div><!-- ROW  END-->


    <?php 

     include('footer.php');

    ?>
</div>

</body>
</html>
