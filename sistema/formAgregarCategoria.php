<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Formulario de alta de una nueva categoria</h1>

        <form action="agregarCategoria.php" method="post">
            Nombre de la Categoria:
            <br>
            <input type="text" name="catNombre" class="form-control">
            <br>
            <button class="btn btn-outline-secondary">Agregar Categoría</button>
        </form>

    </main>

<?php  include 'includes/footer.php';  ?>