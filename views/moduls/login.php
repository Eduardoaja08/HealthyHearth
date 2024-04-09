<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar sesión</title>
</head>

<body>
    <div class="container-form sign-in">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a HealthyHeart</h2>
                <p>Ingresa tu correo electrónico y contraseña para poder acceder</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" method="POST" action="?page=inicio_user">
            <h2 class="create-account">Crear una cuenta</h2>
            <!-- <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div> -->
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" placeholder="Nombre">
            <input type="email" placeholder="Correo electrónico">
            <input type="password" placeholder="Contraseña">
            <input type="submit" value="Registrarse">

        </form>
    </div>
    <div class="container-form sign-up">
        <form class="formulario" method="POST">
            <h2 class="create-account">Iniciar Sesion</h2>
            <!-- <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div> -->
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <?php
                $login = new ControladorUsuario();
                $login->ctrIngresoUsuario();
            ?>
            <input type="email"id="ingemail" name="ingemail" placeholder="Correo electrónico">
            <input type="password" id="ingpassword" name="ingpassword"  placeholder="Contraseña">
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
            <!-- <input type="submit" value="Iniciar Sesion"> -->
            
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="views/js/script.js"></script>
</body>

</html>