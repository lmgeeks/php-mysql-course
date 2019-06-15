<?php


    function listarProductos(){
        $link = conectar();

        $sql = "SELECT idProducto,prdNombre,prdPrecio,mkNombre,catNombre,prdPresentacion,prdStock,prdImagen 
                FROM productos as p, marcas as m, categorias as c
                where m.idMarca = p.idMarca
                AND c.idCategoria = p.idCategoria";

        $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

        return $resultado;
    }


?>