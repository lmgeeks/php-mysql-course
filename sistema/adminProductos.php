<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $listaProductos = listarProductos();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de productos</h1>

        <a href="admin.php" class="btn btn-outline-secondary mb-3">Volver a principal</a>
        <table class="table table-border table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-outline-secondary">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
            while ( $producto = mysqli_fetch_assoc($listaProductos) ) {
?>
            <tr>
                <td><?php echo $producto['prdNombre']; ?></td>
                <td><?php echo $producto['prdPrecio']; ?></td>
                <td><?php echo $producto['mkNombre']; ?></td>
                <td><?php echo $producto['catNombre']; ?></td>
                <td><?php echo $producto['prdPresentacion']; ?></td>
                <td><img src="images/productos/<?php echo $producto['prdImagen']; ?>" class="img50"></td>
                <td>
                    <a href="formModificarProducto.php" class="btn btn-outline-secondary">Modificar producto</a>
                </td>
                <td>
                    <a href="formEliminarProducto.php" class="btn btn-outline-secondary">Eliminar producto</a>
                </td>
            </tr>
<?php
            }
?>
            </tbody>
        </table>
        <a href="admin.php" class="btn btn-outline-secondary mt-3">Volver a principal</a>
    </main>

<?php  include 'includes/footer.php';  ?>