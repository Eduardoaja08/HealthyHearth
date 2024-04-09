<?php
class ControladorCarrito {


    public static function ctrAgregarAlCarrito($usuario_id, $producto_id)
    {
            
        $respuesta1 = ModeloCarrito::mdlAgregarAlCarrito($usuario_id, $producto_id);
        if ($respuesta1 == "ok") {
            echo '<script>
                    window.location.href = "products";
                </script>';
        }
                    
    }
    

    public static function ctrMostrarTotalCarrito($usuario_id)
    {
        
        $respuesta = ModeloCarrito::mdlMostrarTotalCarrito($usuario_id);
        return $respuesta;
    }
}
?>