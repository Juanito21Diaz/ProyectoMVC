<?php
include_once "../mtipoDocusuario.php";
tipoDoc= $_POST["tumeroc"];
numero= $_POST["numero"];
nombre= $_POST["nombre"];
apellido=$_POST["apellido"];
correo=$_POST["correo"];
password=$_POST["password"];
direccion=$_POST["direccion"];
telefono=$_POST["telefono"];
genero=$_POST["genero"];
rol=$_POST["rol"];

$usuarioM = new \models\Usuario;
$usuarioM->setTipoDoc($tipoDoc);
$usuarioM->setIdentificacion($numero);
$usuarioM->setNombre($nombre);
$usuarioM->setApellido($apellido);
$usuarioM->setCorreo($correo);
$usuarioM->setPassword($password);
$usuarioM->setDireccion($direccion);
$usuarioM->setTelefono($telefono);
$usuarioM->setGenero($genero);
$usuarioM->setIdRol($rol);
$response = $usuarioM->create();
echo json_encode($response);

unset()