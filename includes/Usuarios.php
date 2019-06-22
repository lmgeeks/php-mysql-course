<?php

/**
 * @return bool|mysqli_result
 */
function listarUsuarios()
{
    $link = conectar();

    $sql = "SELECT * FROM usuarios";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}


/**
 * @return bool|mysqli_result
 */
function agregarUsuario(){


    $usuNombre = $_POST['usuNombre'];
    $usuApellido = $_POST['usuApellido'];
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];
    $usuEstado = 1;


    $link = conectar();

    $sql = "INSERT INTO usuarios (usuNombre,usuApellido,usuEmail,usuPass,usuEstado) 
                    VALUES('".$usuNombre."','".$usuApellido."','".$usuEmail."','".$usuPass."','".$usuEstado."')";

    $resultado = mysqli_query($link, $sql);

    ($resultado) ? $rtn = $resultado : $rtn = mysqli_error($link);

    return $rtn;

}

/**
 * @return bool|mysqli_result
 */
function actualizarUsuario(){

    $idUsuario = $_POST['idUsuario'];
    $usuNombre = $_POST['usuNombre'];
    $usuApellido = $_POST['usuApellido'];
    $usuEmail = $_POST['usuEmail'];
    $usuPass = $_POST['usuPass'];
    $usuEstado = $_POST['usuEstado'];

    $link = conectar();

    $sql = "UPDATE usuarios SET usuNombre = '".$usuNombre."', usuApellido = '".$usuApellido."', usuEmail = '".$usuEmail."',";
    if (!empty($usuPass)){
        $sql.= "usuPass = '".$usuPass."', ";
    }
    $sql.="usuEstado = '".$usuEstado."' WHERE idUsuario = '".$idUsuario."'";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}


function eliminarUsuario(){

    $idUsuario = $_GET['idUsuario'];

    $link = conectar();

    $sql = "DELETE FROM usuarios WHERE idUsuario = '".$idUsuario."'";

    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    return $resultado;
}


?>