<?php
    $listarPerfil = new ControladorPerfil();
    $lista = $listarPerfil->ctrMostrarPerfil($_SESSION["id"]);

    $id_nutriologo = $_GET["medico"];
    $listarNutri = new ControladorNutriologo();
    $info = $listarNutri->ctrMostrarSolNutr($id_nutriologo);





?>


<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Agendar Cita</a>

<div class="container" class="w-md" >
    <div class="formulario">
      <br>
      <form method="POST">
        <!-- Formulario citas -->
	<div style="display: flex; flex-wrap: wrap; justify-content: center; width: 100%;">

  <div style="max-width: 1000px; margin: 20px;">
       <h2 style="font-size: 22px;">Información requerida para agendar la cita</h2><br>
       <div class="form-group">
          <label for="nombre">Título de la cita:</label>
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título de la cita" required> 
        </div>
        <div class="form-group">
          <label for="nombre">Descripción de la cita:</label>
          <textarea type="text" name="descripcion" class="form-control" name="descripcion" required></textarea>
        </div>

       <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $lista["NOMBRE_USUARIO"]?>" disabled>
        </div>
        <div class="form-group">
            <label for="nombre">Apellidos:</label>
            <input type="text" class="form-control" name="apellido" placeholder="Ingrese sus apellidos" value="<?php echo $lista["APELLIDOS_USUARIO"]?>" disabled>
          </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico" value="<?php echo $lista["CORREO"]; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" name="telefono" placeholder="Teléfono" value="<?php echo $lista["TELEFONO"]; ?>" disabled>
          </div>
        <div class="form-group">
          <label for="fechaHora">Fecha:</label>
          <select class="form-control" name="tipo_cita" required>
            <option>Seleccione el tipo de cita</option>  
            <option value="1">Presencial</option>
            <option value="2">Online</option>
          </select>
        </div>

        <div class="form-group">
          <label for="fechaHora">Fecha:</label>
          <input type="date" class="form-control" name="fecha" required>
        </div>

        <div class="form-group">
          <label for="fechaHora">Hora:</label>
          <input type="time" class="form-control" name="hora" required>
        </div>

        <input type="submit" name="agendar-cita" class="btn btn-success" value="Agendar cita">

        <!-- <button onclick="mostrarAlertaYVolver()" class="btn btn-success">Agendar</button>
    <script>
        function mostrarAlertaYVolver() {
            alert("Su cita fue enviada con éxito");
            history.back();
        }
    </script> -->

        </div>

	<div style="width: 100%; max-width: 450px; margin: 20px;">
        <h2 style="font-size: 22px;">Información del médico</h2><br>
        <div class="form-group">
          <label for="nombre">Nombre completo del médico:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $info['NOMBRE_USUARIO'] . " " . $info['APELLIDOS_USUARIO'] ?>" disabled>
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" placeholder="Correo electrónico" value="<?php echo $info['CORREO']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" value="<?php echo $info['TELEFONO']; ?>" disabled>
          </div>
           
          <h2 style="font-size: 22px;">Costo de la consulta</h2><br>
          <div class="form-group">
            <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" value="$ <?php echo $info['COSTO_CONSULTA']; ?>" disabled>
          </div>
</div>

</div>
      </form>

    </div>
  </div>


<?php 
    if(isset($_POST['agendar-cita'])) {
        $agendarCita = new ControladorCitas();
        $agendarCita->ctrAgendarCita(
            $_POST['titulo'],
            $_POST['descripcion'],
            $_POST['fecha'],
            $_POST['hora'],
            $_POST['tipo_cita'],
            $info['COSTO_CONSULTA'],
            $id_nutriologo,
            $_SESSION['id']
        );
    }
?>
