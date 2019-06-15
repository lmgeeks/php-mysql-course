<!-- The Modal -->
<div class="modal fade" id="Agregar">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="adminCategorias.php" method="POST">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="catNombre"><b>Nombre:</b></label>
                        <input type="text" class="form-control" id="catNombre" name="catNombre">
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