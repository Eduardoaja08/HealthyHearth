<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br>
  <a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Mi perfil</a>
     

  <!-- Tabla o cualquier otro elemento que desees agregar -->
    <div class="mt-6">
        <center><h3 class="text-xl font-semibold text-gray-800 mb-2">Historial Clinico</h3></center>
  <!-- Puedes agregar aquí tu tabla u otro contenido-->
    
  <div class="flex items-center justify-between mb-6" style="margin-left: 25px;">
  
        <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-blue-800" data-toggle="modal" data-target="#ModalAgregarHistorial">
            Agregar
        </button>
   
  </div>

  <div style="overflow-x: auto; max-width: 100%;">
  <!--<table class="min-w-full bg-white border border-gray-200" > -->
        <table class=" table table-striped table-bordered tablaHistorial" id="tablaHistorial">
    <!-- Encabezados de la tabla -->
            
            <thead>

                <tr>
                    
                      <th style="width:10px">#</th>
                      <th class="py-2 px-4 border-b">Peso (Kgs)</th>
                      <th class="py-2 px-4 border-b">Talla (cms)</th>
                      <th class="py-2 px-4 border-b">Circunferencia de Cintura (cms)</th>
                      <th class="py-2 px-4 border-b">Circunferencia de Abdomen (cms)</th>
                      <th class="py-2 px-4 border-b">Circunferencia de Cadera (cms)</th>
                      <th class="py-2 px-4 border-b">Circunferencia de Brazo (cms)</th>
                      <th class="py-2 px-4 border-b">Circunferencia de Espalda (cms)</th>
                      <th class="py-2 px-4 border-b">ICM (Kgs) </th>
                      <th class="py-2 px-4 border-b">Objetivo Siguiente</th>
                      <th class="py-2 px-4 border-b">Fecha </th>
                      <th class="py-2 px-4 border-b">Observaciones </th>
                      <th class="py-2 px-4 border-b">Acción</th>

                </tr>
                      
                <?php

$listarHistorial = new ControladorHistorial();
$lista = $listarHistorial->ctrMostrarHistorial($_SESSION['id']);

$id_historial = 0;
foreach ($lista as $historial) {
$id_historial++;
?>
                     <tr>
                          <td style="width:10px"><?php echo $id_historial; ?></td>   
                          <td><?php echo $historial['PESO']; ?></td>
                          <td><?php echo $historial['TALLA']; ?></td>
                          <td><?php echo $historial['CIRCUNFERENCIA_CINTURA']; ?></td>
                          <td><?php echo $historial['CIRCUNFERENCIA_ABDOMEN']; ?></td>
                          <td><?php echo $historial['CIRCUNFERENCIA_CADERA']; ?></td>
                          <td><?php echo $historial['CIRCUNFERENCIA_BRAZO']; ?></td>
                          <td><?php echo $historial['CIRCUNFERENCIA_ESPALDA']; ?></td>
                          <td><?php echo $historial['ICM']; ?></td>
                          <td><?php echo $historial['OBJETIVO_PROXIMO']; ?></td>
                          <td>
                              <?php 
                                  $fecha_objeto = new DateTime($historial['FECHA']);
                                  setlocale(LC_TIME, 'spanish');
                                  $fecha_formateada = strftime("%d de %B del %Y", $fecha_objeto->getTimestamp());
                                  echo $fecha_formateada;
                              ?>
                          </td>
                          <td><?php echo $historial['OBSERVACIONES']; ?></td>
                          
                          <td style="max-width: 40px;">
                                <button type="button" class="btn btn-warning btnEditarHistorial" data-toggle="modal" data-target="#editarModal<?php echo $id_historial; ?>"><i class="fas fa-pencil"></i></button>
                                <button type="button" class="btn btn-danger btnEliminarHistorial" data-toggle="modal" data-target="#eliminarModal<?php echo $id_historial; ?>"><i class="fa fa-times"></i></button>
                          </td>
                      </tr>




<!-- MODAL MODIFICAR -->
<div class="modal fade" id="editarModal<?php echo $id_historial; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <div class="modal-body">

                <form method="post" n>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Peso</span>
                        </div>
                            <input type="hidden" id="id_historial" name="id_historial" value="<?php echo $historial['ID_HISTORIAL_CLINICO']; ?>">
                            <input type="text" class="form-control" placeholder="kgs" id="peso" name="peso" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['PESO']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Talla</span>
                        </div>    
                            <input type="text" class="form-control" placeholder="cms" id="talla" name="talla" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['TALLA']; ?>">
                    </div>  
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Circunferencia Cintura</span>
                        </div>    
                            <input type="text" class="form-control" placeholder="cms" id="cintura" name="cintura" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['CIRCUNFERENCIA_CINTURA']; ?>">
                    </div>        
                            
                    <div class="input-group mb-3"> 
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Circunferencia Abdomen</span>
                        </div>       
                            <input type="text" class="form-control" placeholder="cms" id="abdomen" name="abdomen" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['CIRCUNFERENCIA_ABDOMEN']; ?>">
                    </div>  
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Circunferencia Cadera</span>
                        </div>
                            <input type="text" class="form-control" placeholder="cms" id="cadera" name="cadera" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['CIRCUNFERENCIA_CADERA']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Circunferencia Brazo</span>
                        </div>
                            <input type="text" class="form-control" placeholder="cms" id="brazo" name="brazo" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['CIRCUNFERENCIA_BRAZO']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Circunferencia Espalda</span>
                        </div>
                            <input type="text" class="form-control" placeholder="cms" id="espalda" name="espalda" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['CIRCUNFERENCIA_ESPALDA']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Indice Masa Corporal ICM</span>
                        </div>
                            <input type="text" class="form-control" placeholder="kgs" id="icm" name="icm" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['ICM']; ?>">
                    </div>
                
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Ojetivo Siguiente</span>
                        </div>
                            <input type="text" class="form-control" placeholder="descripción" id="objetivo" name="objetivo" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['OBJETIVO_PROXIMO']; ?>">
                    </div>
                    
                    <div class="input-group mb-3"> 
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha</span>
                        </div>
                            <input type="datetime-local" class="form-control" placeholder="yyyy/mm/dd" id="fecha" name="fecha" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['FECHA']; ?>">
                            
                        </div>
                            

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Observaciones</span>
                        </div>
                            <input type="text" class="form-control" placeholder="descripción" id="observaciones" name="observaciones" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $historial['OBSERVACIONES']; ?>">
                    </div>
                
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" name="actualizar-historial" value="Guardar">
                </form>
            </div> 
            
        </div>
    </div>
</div>

<!-- MODAL ELIMINAR -->
<div class="modal fade" id="eliminarModal<?php echo $id_historial; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>¿Seguro Eliminar Datos?</p>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="borrar?id_historial=<?php echo $historial['ID_HISTORIAL_CLINICO']; ?>">
                <button type="button" class="btn btn-danger">Eliminar</button></a>
            </div>

        </div>
    </div>
</div>
              
                        <?php
                        
                        }

                            if(isset($_POST['actualizar-historial'])) { 

                                $agregarHistorial = new ControladorHistorial();

                                $agregarHistorial->ctrActualizarHistorial(
                                $_POST['id_historial'],
                                $_POST['peso'],
                                $_POST['talla'],
                                $_POST['cintura'],
                                $_POST['abdomen'],
                                $_POST['cadera'],
                                $_POST['brazo'],
                                $_POST['espalda'],
                                $_POST['icm'],
                                $_POST['objetivo'],
                                $_POST['fecha'],
                                $_POST['observaciones']
                                );
                            }
                        ?>
                      </thead>

</table>
</div>
<!-- MODAL AGREGAR -->
<div class="modal fade" id="ModalAgregarHistorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevos Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    
            </div>

            <div class="modal-body">

            <form method="post">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Peso</span>
                    </div>
                        <input type="text" class="form-control" placeholder="kgs" id="peso" name="peso" aria-label="Username" aria-describedby="basic-addon1" id="PESO">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Talla</span>
                    </div>    
                        <input type="text" class="form-control" placeholder="cms" id="talla" name="talla" aria-label="Username" aria-describedby="basic-addon1"  id="TALLA">
                </div>  

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Circunferencia Cintura</span>
                    </div>    
                        <input type="text" class="form-control" placeholder="cms" id="cintura" name="cintura" aria-label="Username" aria-describedby="basic-addon1"  id="CIRCUNFERENCIA_CINTURA">
                </div>        
                        
                <div class="input-group mb-3"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Circunferencia Abdomen</span>
                    </div>       
                        <input type="text" class="form-control" placeholder="cms" id="abdomen" name="abdomen" aria-label="Username" aria-describedby="basic-addon1"  id="CIRCUNFERENCIA_ABDOMEN">
                </div>  

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Circunferencia Cadera</span>
                    </div>
                        <input type="text" class="form-control" placeholder="cms" id="cadera" name="cadera" aria-label="Username" aria-describedby="basic-addon1"  id="CIRCUNFERENCIA_CADERA">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Circunferencia Brazo</span>
                    </div>
                        <input type="text" class="form-control" placeholder="cms" id="brazo" name="brazo" aria-label="Username" aria-describedby="basic-addon1"  id="CIRCUNFERENCIA_BRAZO">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Circunferencia Espalda</span>
                    </div>
                        <input type="text" class="form-control" placeholder="cms" id="espalda" name="espalda" aria-label="Username" aria-describedby="basic-addon1"  id="CIRCUNFERENCIA_ESPALDA">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Indice Masa Corporal ICM</span>
                    </div>
                        <input type="text" class="form-control" placeholder="kgs" id="icm" name="icm" aria-label="Username" aria-describedby="basic-addon1"  id="ICM">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Ojetivo Siguiente</span>
                    </div>
                        <input type="text" class="form-control" placeholder="descripción" id="objetivo" name="objetivo" aria-label="Username" aria-describedby="basic-addon1"  id="OBJETIVO_PROXIMO">
                </div>

                <div class="input-group mb-3"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="fechaHora" id="basic-addon1">Fecha</span>
                    </div>
                        <input type="datetime-local" class="form-control" class="form-control" id="fecha" name="fecha" aria-label="Username" aria-describedby="basic-addon1"  id="FECHA">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Observaciones</span>
                    </div>
                        <input type="text" class="form-control" placeholder="descripción" id="observaciones" name="observaciones" aria-label="Username" aria-describedby="basic-addon1"  id="OBSERVACIONES">
                </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary" name="agregar-historial" value="Guardar">
            </form>
        
            </div>

                <div class="modal-footer"></div>
        </div>
    </div>
</div>

                        <?php
                            
                            if(isset($_POST['agregar-historial'])) { 

                            $agregarHistorial = new ControladorHistorial();
                            
                            $agregarHistorial->ctrAgregarHistorial(
                                $_SESSION['id'],
                                $_POST['peso'],
                                $_POST['talla'],
                                $_POST['cintura'],
                                $_POST['abdomen'],
                                $_POST['cadera'],
                                $_POST['brazo'],
                                $_POST['espalda'],
                                $_POST['icm'],
                                $_POST['objetivo'],
                                $_POST['fecha'],
                                $_POST['observaciones']
                            );
                            }           
                        ?>
            </div>
        