<?php
require 'includes/conexion.php';
require 'includes/Usuarios.php';
include 'views/header.html';
include 'views/nav.php';

?>

    <main class="container">
        <?php
            if(isset($_POST) && !empty($_POST)){
                if($_POST['accion'] == 'agregar'){
                    $insertarUsuario = agregarUsuario();

                    if($insertarUsuario === true){

                        ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fas fa-check-circle"></i> Success! </strong> Usuario agregado con exito.
                        </div>
                        <?php
                    } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fas fa-exclamation-triangle"></i> Danger! </strong> <?=$insertarUsuario?>
                        </div>
                    <?php }

                } else if($_POST['accion'] == 'modificar'){
                    $modificarUsuario = actualizarUsuario();

                    if($modificarUsuario === true){

                        ?>
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fas fa-check-circle"></i> Success! </strong> Usuario modificado con exito.
                        </div>
                        <?php
                    } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong> <i class="fas fa-exclamation-triangle"></i> Danger! </strong> <?=$modificarUsuario?>
                        </div>
                    <?php }
                }

                $Usuarios = listarUsuarios();
            } else { $Usuarios = listarUsuarios(); }
            ?>
        <h1>Listado de Usuarios</h1>

        <table class="table table-striped table-border table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                    <th colspan="3">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#Agregar"><i class="far fa-plus-square"></i>&nbsp; Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php while ($usuario = mysqli_fetch_assoc($Usuarios)){ ?>
                <tr>
                    <td scope="row"><?= $usuario['idUsuario'] ?></td>
                    <td scope="row"><?= $usuario['usuNombre'] ?></td>
                    <td scope="row"><?= $usuario['usuApellido'] ?></td>
                    <td scope="row"><?= $usuario['usuEmail'] ?></td>
                    <td scope="row"><?php
                        if($usuario['usuEstado'] == 0){
                            echo ' <span class="badge badge-danger">Inactivo</span>';
                        } else {
                            echo '<span class="badge badge-primary">Activo</span>';
                        } ?>
                    </td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#Modificar-<?=$usuario['idUsuario']?>" class="btn btn-info"><i class="far fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="formEliminarCategoria.php" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                <tr>
            <?php
            include 'views/formModificarUsuario.php';
            } ?>
            </tbody>
        </table>

    </main>





<?php
include 'views/formAgregarUsuario.php';
//include 'views/formModificarUsuario.php';
include 'views/footer.php';
?>