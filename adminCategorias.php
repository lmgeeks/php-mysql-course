<?php
require 'includes/conexion.php';
require 'includes/Categoria.php';
require 'includes/Marcas.php';
$Categorias = listarCategorias();
$Marcas = listarMarcas();
include 'views/header.html';
include 'views/nav.php';

?>

    <main class="container">
        <?php
            if(isset($_POST['catNombre']) && !empty($_POST['catNombre'])){

            $insertarCategoria = agregarCategoria();
                if($insertarCategoria === true){

                    ?>
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> Categoria agregada con exito.
                    </div>
                <?php
                } else { ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Danger!</strong> <?=$insertarCategoria?>
                    </div>
                <?php }
                $Categorias = listarCategorias();
            }
            ?>
        <h1>Listado de Categorias</h1>

        <table class="table table-striped table-border table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Descripción</th>
                    <th colspan="3">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#Agregar"><i class="far fa-plus-square"></i>&nbsp; Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php while ($categoria = mysqli_fetch_array($Categorias)){ ?>
                <tr>
                    <td scope="row"><?= $categoria[0] ?></td>
                    <td scope="row"><?= $categoria[1] ?><td>
                    <td>
                        <a href="formModificarCategoria.php" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="formEliminarCategoria.php" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                <tr>
            <?php } ?>
            </tbody>
        </table>

    </main>





<?php  include 'views/formAgregarCategoria.php';  ?>
<?php  include 'views/footer.php';  ?>