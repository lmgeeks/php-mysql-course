<?php
    require 'includes/conexion.php';
    require 'includes/Productos.php';
    require 'includes/Categoria.php';
    require 'includes/Marcas.php';
    include 'views/header.html';
    include 'views/nav.php';
?>

    <style>
        .imgProd {
            width: 100px;
        }
    </style>

    <main class="container">
        <?php
        if(isset($_POST) && !empty($_POST)){

            $insertarProducto = agregarProducto();
            if($insertarProducto === true){

                ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> Producto agregada con exito.
                </div>
                <?php
            } else { ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Danger!</strong> <?=$insertarProducto?>
                </div>
            <?php }
            $Productos = listarProductos();
            $Categorias = listarCategorias();
            $Marcas = listarMarcas();
        } else {
            $Productos = listarProductos();
            $Categorias = listarCategorias();
            $Marcas = listarMarcas();
        }
        ?>
        <h1>Panel de Administración de productos</h1>
        <a href="#" class="btn btn-outline-secondary">Principal</a><br><br>
    <table class="table table-striped table-border table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#Agregar"><i class="far fa-plus-square"></i>&nbsp; Agregar</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            //die($Categorias);
            while ($productos = mysqli_fetch_assoc($Productos)){ ?>
                <tr>
                    <td scope="row"><?= $productos['idProducto'] ?></td>
                    <td scope="row"><?= $productos['prdNombre'] ?></td>
                    <td scope="row"><?= $productos['prdPrecio'] ?></td>
                    <td scope="row"><?= $productos['mkNombre'] ?></td>
                    <td scope="row"><?= $productos['catNombre'] ?></td>
                    <td scope="row"><?= $productos['prdPresentacion'] ?></td>
                    <td scope="row"><?= $productos['prdStock'] ?></td>

                    <td scope="row">
                        <?php
                        if(file_exists('images/productos/'.$productos['prdImagen'])){
                            ?>
                            <img src="images/productos/<?= $productos['prdImagen'] ?>" class="imgProd" alt="">
                        <?php } else { ?>
                            <img src="images/productos/noDisponible.jpg" class="imgProd" alt="">
                        <?php } ?>
                    </td>
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

        <a href="#" class="btn btn-outline-secondary">atras</a>
    </main>

<?php  include 'views/formAgregarProducto.php';  ?>
<?php  include 'views/footer.php';  ?>