<?php include_once "header.php"; ?>
<form action="" id="usuarioFrm">
    <div class="row my-5 justify-content-end">
        <div class="col-12">
            <h1 class="text-center">USUARIOS</h1>
        </div>
    </div>
    <div class="col-3 align-self-end">
        <a onclick="create()" class="btn btn-dark">Registrar</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="form-label">Tipo de Doc.</label>
            <select class="form-control" name="selTipoDoc" id="selTipoDoc">
                <option value="0" selected disabled>Seleccionar</option>
                <option value="TI">TI</option>
                <option value="CC">CC</option>
                <option value="NUIP">NUIP</option>
            </select>
        </div>
        <div class="col-4">
            <label class="form-label">Número:</label>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-4">
            <label for="" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" name="txtApellidos" name="txtApellidos">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4"> 
            <label class="form-label">Correo:</label>
            <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" >
        </div>
        <div class="col-4">
            <label class="form-label">Password</label>
            <input type="password" name="txtPassword" class="form-control" id="txtPassword" >
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="form-label">Dirección:</label>
            <input type="text" class="form-control" id="txtDireccion">
        </div>
        <div class="col-4">
            <label for="" class="form-label" id="txtTelefono">Teléfono: </label>
            <input type="tel" class="form-control" id="txtTelefono" name="txtTelefono" >
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <label for="" class="form-label">Género:</label>
            <select name="selGenero" id="selGenero" class="form-control">
                <option value="0">Seleccione</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="col-4">
            <label class="form-label">Rol</label>
            <select name="selRol" id="selRol" class="form-control">
                <option value="0" selected disabeled>Seleccione</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2 class="mt-5 mb-3 py-1 text-center bg-dark text-white">Usuarios</h2>
        <div class="col-8">
        <table class="table table-dark table-hover text white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tableUsuarios">

                </tbody>
            </table>
        </div>
    </div>
</form>

<?php include_once "footer.php"; ?>
<script src="./assets/js/usuario.js"></script>