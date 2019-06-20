<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesCategorias.php';
    $listadoCategorias = listarCategorias();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Listado de categorias</h1>
    <table class="table table-striped table-border table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>categoría</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ( $categoria = mysqli_fetch_array($listadoCategorias) ) {
?>
            <tr>
                <td><?php echo $categoria[0]; ?></td>
                <td><?php echo $categoria[1]; ?></td>
            </tr>
<?php
     }
?>
        </tbody>
    </table>

    </main>

<?php  include 'includes/footer.php';  ?>