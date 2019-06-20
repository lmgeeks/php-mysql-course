<?php


/**
 * @return bool|mysqli_result
 */
function listarMarcas()
{
    $link = conectar();

    $sql = "SELECT * FROM marcas";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}