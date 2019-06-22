<?php

/**
 * @return bool|mysqli_result
 */
function listarProductos(){
    $link = conectar();

    $sql = "SELECT idProducto,prdNombre,prdPrecio,mkNombre,catNombre,prdPresentacion,prdStock,prdImagen 
                FROM productos as p, marcas as m, categorias as c
                where m.idMarca = p.idMarca
                AND c.idCategoria = p.idCategoria";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}


/**
 * @return bool|mysqli_result
 */
function agregarProducto(){


    $prdNombre = $_POST['prdNombre'];
    $prdPrecio = $_POST['prdPrecio'];
    $idMarca = $_POST['idMarca'];
    $idCategoria = $_POST['idCategoria'];
    $prdPresentacion = $_POST['prdPresentacion'];
    $prdStock = $_POST['prdStock'];
    $prdImagen = $_FILES['prdImagen'];

    subirImagen($prdImagen);

    $link = conectar();

    $sql = "INSERT INTO productos (prdNombre,prdPrecio,idMarca,idCategoria,prdPresentacion,prdStock,prdImagen) 
                    VALUES('".$prdNombre."','".$prdPrecio."','".$idMarca."','".$idCategoria."','".$prdPresentacion."','".$prdStock."','".$prdImagen['name']."')";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;

}



function subirImagen($prdImagen)
{

    $ruta = 'images/productos';
    $array = explode('.', $prdImagen['name']);
    $extension = end($array);

    if(($extension == 'jpg') || ($extension == 'png') || ($extension == 'gif')){

        if(move_uploaded_file($prdImagen['tmp_name'],$ruta . $prdImagen['name'])){
            return $ruta.$prdImagen['name'];
        }

    } else {
        return "Formato de imagen incorrecto";
    }


}


?>