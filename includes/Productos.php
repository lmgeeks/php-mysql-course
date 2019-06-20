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
function agregarProductos(){

    $catNombre = $_POST['idProducto'];
    $catNombre = $_POST['prdNombre'];
    $catNombre = $_POST['prdPrecio'];
    $catNombre = $_POST['prdMarca'];
    $catNombre = $_POST['idCategoria'];
    $catNombre = $_POST['prdPresentacion'];
    $prdStock = $_POST['prdStock'];
    $prdImagen = $_POST['prdImagen'];

    $link = conectar();

    $sql = "INSERT INTO productos (idProducto,prdNombre,prdPrecio,prdMarca,idCategoria,prdPresentacion,prdStock,prdImagen) VALUES('".$catNombre."')";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}


?>