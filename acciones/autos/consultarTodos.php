<?php

require_once 'responses/consultarResponse.php';
require_once '../../modelo/auto.php';
require_once '../../configuracion/database.php';
header('Content-Type: application/json');

$resp = new NuevoResponse();

$resp->ListAutos = auto::BuscarTodas();




echo json_encode($resp);








?>