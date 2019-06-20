<?php

    function subirImagen($prdImagen)
    {
//        $prdImagen = $_FILES['prdImagen'];

        $ruta = 'images/';
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
