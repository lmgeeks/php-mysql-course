<!-- The Modal -->
<div class="modal fade" id="Modificar-<?=$usuario['idUsuario']?>">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modificar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="adminUsuarios.php" method="POST">
                <input type="hidden" value="modificar" name="accion">
                <input type="hidden" class="form-control" id="idUsuario" name="idUsuario" value="<?=$usuario['idUsuario']?>">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="usuNombre"><b>Nombre:</b></label>
                        <input type="text" class="form-control" id="usuNombre" name="usuNombre" value="<?=$usuario['usuNombre']?>" required>

                        <label for="usuApellido"><b>Apellido:</b></label>
                        <input type="text" class="form-control" id="usuApellido" name="usuApellido" value="<?=$usuario['usuApellido']?>" required>

                        <label for="usuEmail"><b>Email:</b></label>
                        <input type="email" class="form-control" id="usuEmail" name="usuEmail" value="<?=$usuario['usuEmail']?>" required>

                        <label for="usuPass"><b>Password:</b></label>
                        <input type="password" class="form-control" id="usuPass" name="usuPass">

                        <label for="usuEstado"><b>Estado del usuario:</b></label><br>
                        <select name="usuEstado" id="usuEstado" class="form-control" >
                            <option value="1" <?php if($usuario['usuEstado']==1){ echo"selected";} ?>>Activo</option>
                            <option value="0" <?php if($usuario['usuEstado']==0){ echo"selected";} ?>>Inactivo</option>
                        </select>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>