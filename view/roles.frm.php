<?php include_once "header.php"; //trae el contenido del encabezado ?>
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
</form>
<?php include_once "footer.php";//trae el contenido del pie de pagina ?>
<script src="./assets/js/roles.js"></script>