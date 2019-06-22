<!-- The Modal -->
<div class="modal fade" id="Agregar">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="adminUsuarios.php" method="POST">
                <input type="hidden" value="agregar" name="accion">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="usuNombre"><b>Nombre:</b></label>
                        <input type="text" class="form-control" id="usuNombre" name="usuNombre">

                        <label for="usuApellido"><b>Apellido:</b></label>
                        <input type="text" class="form-control" id="usuApellido" name="usuApellido">

                        <label for="usuEmail"><b>Email:</b></label>
                        <input type="email" class="form-control" id="usuEmail" name="usuEmail">

                        <label for="usuPass"><b>Password:</b></label>
                        <input type="password" class="form-control" id="usuPass" name="usuPass">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>