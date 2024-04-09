<?php

require_once "conexion.php";

class ModeloCarrito
{


    public static function mdlAgregarAlCarrito($usuario_id, $producto_id)
    {
        try {
            $fecha_actual = date('Y-m-d');
            
            // Verificar si el producto ya está en el carrito
            $stmt = Conexion::conectar()->prepare("SELECT CANTIDAD FROM tb_carrito_compras WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");
            $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
            $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($resultado) {
                // Si el producto ya existe, actualizar la cantidad
                $cantidad_actual = $resultado['CANTIDAD'];
                $nueva_cantidad = $cantidad_actual + 1;
                $stmt = Conexion::conectar()->prepare("UPDATE tb_carrito_compras SET CANTIDAD = :NUEVA_CANTIDAD WHERE FK_PRODUCTO = :ID_PRODUCTO AND FK_USUARIO = :ID_USUARIO");
                $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
                $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
                $stmt->bindParam(":NUEVA_CANTIDAD", $nueva_cantidad, PDO::PARAM_INT);
                $stmt->execute();
            } else {
                // Si el producto no existe, insertar un nuevo registro
                $stmt = Conexion::conectar()->prepare("INSERT INTO tb_carrito_compras (FECHA, CANTIDAD, FK_PRODUCTO, FK_USUARIO) VALUES (:FECHA, 1, :ID_PRODUCTO, :ID_USUARIO)");
                $stmt->bindParam(":ID_PRODUCTO", $producto_id, PDO::PARAM_STR);
                $stmt->bindParam(":ID_USUARIO", $usuario_id, PDO::PARAM_STR);
                $stmt->bindParam(":FECHA", $fecha_actual, PDO::PARAM_STR);
                $stmt->execute();
            }
    
            return "ok";
        } catch (PDOException $e) {
            return $e->getMessage(); // Devuelve el mensaje de error
        }
    }

    
    public static function mdlMostrarTotalCarrito($usuario_id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT P.*, C.*, CC.* FROM tb_productos P 
                                                   JOIN TB_CATEGORIAS C ON P.FK_CATEGORIA = C.ID_CATEGORIA 
                                                   JOIN TB_CARRITO_COMPRAS CC ON P.ID_PRODUCTO = CC.FK_PRODUCTO 
                                                    WHERE CC.FK_USUARIO = $usuario_id 
                                                   ORDER BY ID_PRODUCTO DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
    }

      
}



?>