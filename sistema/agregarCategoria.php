<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesCategorias.php';
    $chequeo = agregarCategoria();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una nueva categoría</h1>
<?php
        if( $chequeo ){
?>
        <div class="alert alert-success">
            Categoría agfregada con éxito.
            <a href="adminCategorias.php" class="btn btn-outline-secondary">
                Volver a panel de categorias
            </a>
        </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>