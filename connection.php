<?php
$hostName = 'localhost';
$user = 'adm_webgenerator';
$pass= 'webgenerator2020';
$db = 'webgenerator';
$connection = new mysqli($hostName,$user,$pass,$db);
if($connection->connect_errno){
    echo "Error al conectarse a la base de datos";
}
?>