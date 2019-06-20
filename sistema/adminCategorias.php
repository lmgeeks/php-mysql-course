<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Listado de categorias</h1>
    <table class="table table-striped table-border table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-outline-secondary">agregar</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>cat</td>
                <td>
                    <a href="formModificarCategoria.php" class="btn btn-secondary">modificar</a>
                </td>
                <td>
                    <a href="formEliminarCategoria.php" class="btn btn-secondary">eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>

    </main>

<?php  include 'includes/footer.php';  ?>