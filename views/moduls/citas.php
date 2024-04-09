<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
<br><a href="index.php" style="color: black; margin-left: 35px;">Inicio</a> / <a href="" style="color: black;">Recomendaciones</a>
<center>
<div class="content">
            <div class="animated fadeIn" style="width: 95%;">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card" style="width: 100%; overflow-x: auto;">
                            <div class="card-header" style="display: flex; flex-direction: space-between;">

                              <div class="col-md-10">
                                <strong class="card-title">Citas</strong>
                              </div>
                              <!-- <a href="pedidos"><button type="button" class="btn btn-danger btn-ver-detalles">Cerrar</button></a> -->
                            </div>
                            
                            <div class="card-body">
                                <table  class="table table-striped table-bordered tablaCitas" id="tablaCitas">
                                    <thead>
                                        
                                        <tr>
                                           
                                        <th style="width:10px">#</th>
                                            <th>Nombre de Médico</th>
                                            <th>Titulo Cita </th>
                                            <th>Descripción de la cita </th>
                                            <th>Fecha </th>
                                            <th>Hora </th>
                                            <th>Tipo Cita </th>
                                            <th>Costo de la Cita </th>
                                            <th>Estatus </th>   
                                            <th>Liga de reunión </th>                   
                                        </tr>

                                        

                                        <?php
                                        if(isset($_SESSION['id'])) {
                                            // Obtener el valor del parámetro 'id_cita' y asignarlo a una variable
                                            $id_cita = $_SESSION['id'];
                                            $listarDetallesCita = new ControladorDetallesCita();
                                            $lista = $listarDetallesCita->ctrMostrarDetallesCita($id_cita);
                                            $id_cita = 0;

                                            foreach ($lista as $cita) {
                                                
                                                $id_cita++;
                                            
                                            ?>

                                            <tr>
                                                <td style="width:10px"><?php echo $id_cita; ?></td>
                                                <td><?php echo $cita['NOMBRE_USUARIO'] . " " . $cita['APELLIDOS_USUARIO'] ?></td>
                                                <td><?php echo $cita['TITULO_CITA']; ?></td>
                                                <td><?php echo $cita['DESCRIPCION_CITA']; ?></td>
                                                <td>
                                                <?php 
                                                $fecha_objeto = new DateTime($cita['FECHA']);
                                                setlocale(LC_TIME, 'spanish');
                                                $fecha_formateada = strftime("%d de %B del %Y", $fecha_objeto->getTimestamp());
                                                echo $fecha_formateada;
                                                ?></td>
                                                <td><?php echo $cita['HORA']; ?></td>
                                                <td><?php echo $cita['NOMBRE_TIPO_CITA']; ?></td>
                                                <td>$ <?php echo $cita['COSTO']; ?></td>
                                                <td><?php echo $cita['NOMBRE_ESTATUS']; ?></td>
                                                <td><?php echo $cita['URL_VIDEOLLAMADA'] == "" ? "No disponible" : '<a href="'. $cita['URL_VIDEOLLAMADA'] .'" style="color: black;">' .$cita['URL_VIDEOLLAMADA']. '</a>' ?></td>
                                            </tr>

                                            <?php

                                            }

                                        } else {
                                            // Si el parámetro 'id_medico' no está presente en la URL, puedes manejarlo de alguna manera, como mostrar un mensaje de error
                                            
                                            echo "<p style='color: red;'>ID de la cita";
                                        }
                                        
                                        ?>

                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
</div><!-- .content -->
</center>