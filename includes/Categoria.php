<?php


    /**
     * @return bool|mysqli_result
     */
	function listarCategorias()
	{
	    $link = conectar();

	    $sql = "SELECT * FROM categorias";

	    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

		return $resultado;
	}

    /**
     * @param $catNombre
     * @return bool|mysqli_result
     */
	function agregarCategoria(){

        $catNombre = $_POST['catNombre'];

	    $link = conectar();

	    $sql = "INSERT INTO categorias (catNombre) VALUES('".$catNombre."')";

	    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

	    return $resultado;
    }

    /**
     * @param $idCategoria
     * @return bool|mysqli_result
     */
    function actualizarCategoria(){}

    /**
     * @param $idCategoria
     * @return bool|mysqli_result
     */
    function eliminarCategoria(){}


?>