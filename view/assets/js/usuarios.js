function readRol(){
    let url= "../controller/roles.read.php";
    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
        let opciones= "";
        data.forEach(element => {
            opciones += `<option selected disabled value="${element.id}>${element.nombrerol} </option>`;

        });
        selRol.innerHTML = opciones;
    });
}

function create(){
    let url = "../controller/usuarios.create.php";
    let data = `tipoDoc=${selTipoDoc.value}&nombre=${txtNombre.value}&numero=${txtNumero.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtPassword.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRol.value}`;
    const option = {
        methods: "POST",
        body: data,
    };
    fetch(url, option)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
    });
}

readRol();