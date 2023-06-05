<?php

include_once "../models/rol.php";

$rolM = new \modelo\Rol();
$response = $rolM->read();
echo json_encode($response);
unset($rolM);
unset($response);
