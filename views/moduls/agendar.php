<div class="background-menu" style="height: 90px; width: 100%; background-color: #1ebf60;"></div>
  <br><a href="index.php" style="color: black; margin-left: 35px;"> Inicio </a> / <a href="" style="color: black;"> Agendar Cita</a>

<div class="container" class="w-md" >
    <div class="formulario">
      <br>
      <form>
        <!-- Formulario citas -->
	<div style="display: flex; flex-wrap: wrap; justify-content: center;">
	<div style="max-width: 1000px; margin: 20px;">
        <h2 style="font-size: 22px;">Información del médico</h2><br>
        <div class="form-group">
          <label for="nombre">Nombre completo del médico:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" value="Fernanda Sanchez Hernandez" disabled>
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" value="fernanda@gmail.com" disabled>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su número de teléfono" value="+52 5544543454" disabled>
          </div>
           
        
</div>
<div style="max-width: 1000px; margin: 20px;">
       <h2 style="font-size: 22px;">Información requerida para agendar la cita</h2><br>
       <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" value="Juan">
        </div>
        <div class="form-group">
            <label for="nombre">Apellidos:</label>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese sus apellidos" value="Perez Gomez">
          </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" value="juan@gmail.com">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su número de teléfono" value="+52 5544543454">
          </div>
           <div class="form-group">
          <label for="fechaHora">Fecha y Hora:</label>
          <input type="datetime-local" class="form-control" id="fechaHora">
        </div>

        <button onclick="mostrarAlertaYVolver()" class="btn btn-success">Agendar</button>
    <script>
        function mostrarAlertaYVolver() {
            alert("Su cita fue enviada con éxito");
            history.back();
        }
    </script>

        </div>
</div>
      </form>

    </div>
  </div>
