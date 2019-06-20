<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Formulario de alta de una nueva Marca</h1>

        <form action="agregarMarca.php" method="post">
            Nombre de la Marca:
            <br>
            <input type="text" name="mkNombre">
        </form>

    </main>

<?php  include 'includes/footer.php';  ?>