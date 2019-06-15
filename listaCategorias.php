<?php
    require 'includes/conexion.php';
    require 'includes/Categoria.php';
    $Categorias = listarCategorias();
    include 'views/header.html';
    include 'views/nav.php';
?>
    <main class="container">
        <h1>Listado de Categorias</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Id
                    </th>
                    <th scope="col">
                        Descripción
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                //die($Categorias);
                while ($categoria = mysqli_fetch_array($Categorias)){
                    echo '<tr>';
                    echo '<td scope="row">', $categoria[0], '</td>';
                    echo '<td>', $categoria[1], '<td>';
                    echo '<tr>';
                }
                ?>
            </tbody>
        </table>


    </main>





<?php  include 'views/footer.php';  ?>