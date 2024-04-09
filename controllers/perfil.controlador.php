<?php

class ControladorPerfil
{
    /*=============================================
    MOSTRAR PerfilS
    =============================================*/
    public static function ctrMostrarPerfil($id_perfil)
    {
        $tabla = "TB_USUARIOS";
        $respuesta = ModeloPerfil::mdlMostrarPerfil($tabla, $id_perfil);
        return $respuesta;
    }




public static function ctrEditarPerfil($id_perfil, $nombre, $apellidos, $correo, $telefono, $ocupacion, $genero, $foto)
{

    if ($id_perfil) {

    if(($foto["tmp_name"]) && !empty($foto["tmp_name"])) {
        $directorio = "vistas/img/perfil/";

        // Nombre de archivo y ruta de almacenamiento
        $nombreArchivo = basename($foto["name"]);
        $rutaAlmacenamiento = $directorio . $nombreArchivo;
    
        // Guardar la imagen en el directorio de almacenamiento
        if (move_uploaded_file($foto["tmp_name"], $rutaAlmacenamiento)) {
            $respuesta = ModeloPerfil::mdlEditarPerfilFoto("TB_USUARIOS", $id_perfil, $rutaAlmacenamiento);
            if ($respuesta == "ok") {
               
                $respuesta1 = ModeloPerfil::mdlEditarPerfil("TB_USUARIOS", $id_perfil, $nombre, $apellidos, $correo, $telefono, $ocupacion, $genero);
                if ($respuesta1 == "ok") {
                    echo '<script>
                            window.location.href = "perfil";
                        </script>';
                }
            }

            
            // echo "<a href=" . $rutaAlmacenamiento . ">Ir allá</a>";
        }
    } else {
        $respuesta1 = ModeloPerfil::mdlEditarPerfil("TB_USUARIOS", $id_perfil, $nombre, $apellidos, $correo, $telefono, $ocupacion, $genero);
        if ($respuesta1 == "ok") {
            echo '<script>
                    window.location.href = "perfil";
                </script>';
        }
    }
    
        }

    }


}



