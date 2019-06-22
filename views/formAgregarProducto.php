<style>
    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    input[type="file" i] {
        align-items: baseline;
        color: inherit;
        text-align: start !important;
    }
    input[type="hidden" i], input[type="image" i], input[type="file" i] {
        -webkit-appearance: initial;
        background-color: initial;
        cursor: default;
        padding: initial;
        border: initial;
    }
    .inputfile-2 + label {
        color: #d3394c;
        border: 2px solid currentColor;
    }

    .inputfile + label {
        max-width: 80%;
        font-size: 1.25rem;
        font-weight: 700;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        padding: 0.625rem 1.25rem;
    }
    .no-js .inputfile + label {
        display: none;
    }

    .inputfile:focus + label,
    .inputfile.has-focus + label {
        outline: 1px dotted #000;
        outline: -webkit-focus-ring-color auto 5px;
    }

    .inputfile + label * {
        /* pointer-events: none; */
        /* in case of FastClick lib use */
    }

    .inputfile + label svg {
        width: 1em;
        height: 1em;
        vertical-align: middle;
        fill: currentColor;
        margin-top: -0.25em;
        /* 4px */
        margin-right: 0.25em;
        /* 4px */
    }
    .inputfile-2 + label {
        /* color: #d3394c; */
        /* border: 2px solid currentColor; */
    }

    .inputfile-2:focus + label,
    .inputfile-2.has-focus + label,
    .inputfile-2 + label:hover {
        color: #722040;
    }

</style>

<!-- The Modal -->
<div class="modal fade" id="Agregar">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="adminProductos.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="prdNombre">Nombre:</label>
                        <input type="text" name="prdNombre" id="prdNombre" class="form-control" required>

                        <label for="prdPrecio">Precio:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" name="prdPrecio" id="prdPrecio" class="form-control" required>
                        </div>

                        <label for="idMarca">Marca:</label>
                        <select name="idMarca" id="idMarca" class="form-control" required>
                            <option disabled selected>Seleccione una marca</option>
                            <?php while ($marca = mysqli_fetch_assoc($Marcas)){ ?>
                                <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
                            <?php } ?>
                        </select>

                        <label for="idCategoria">Categoría: </label>
                        <select name="idCategoria" id="idCategoria" class="form-control" required>
                            <option disabled selected>Seleccione una Categoría</option>
                            <?php while ($categoria = mysqli_fetch_assoc($Categorias)){ ?>
                                <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
                            <?php } ?>
                        </select>

                        <label for="prdPresentacion">Presentacion: </label>
                        <textarea name="prdPresentacion" id="prdPresentacion" class="form-control"></textarea>

                        <label for="prdStock">Stock: </label>
                        <input type="number" name="prdStock" id="prdStock" class="form-control">

                        <label for="prdImagen">Imagen: </label>
<!--                        <input type="file" name="prdImagen" id="prdImagen" class="form-control">-->

                        <div class="box">
                            <input type="file" name="prdImagen" id="prdImagen" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" onchange="loadFile(event)">
                            <label for="prdImagen"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                <span>Imagen</span>
                            </label>
                            <img id="output" width="200px" style="margin-left: 100px"/>
                        </div>
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