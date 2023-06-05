<?php include_once "header.php"; //trae el contenido del encabezado 
?>
<form id="rolesFrm">
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center">Formulario Roles</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-end">
        <div class="col-6">
            <label for="" class="form-label">Nombre del Rol: </label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre">
        </div>
        <div class="col-3 align-self-end">
            <input onclick="create()" class="btn btn-dark bg-dark" type="button" value="Registrar">
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <h2 class="mt-5 mb-3 py-1 text-center bg-dark text-white">Roles</h2>
        <div class="col-8">
            <table class="table table-dark table-hover text white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Estados</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tableRol">

                </tbody>
            </table>
        </div>
    </div>
    <a onclick="actualizarEstado()" class="btn btn-primary" href="#">Hola</a>
</form>
<?php include_once "footer.php"; //trae el contenido del pie de pagina 
?>
<script src="./assets/js/roles.js"></script>