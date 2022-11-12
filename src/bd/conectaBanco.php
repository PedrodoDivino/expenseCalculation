<?php
$usuario = 'root';
$senha = '';
$dataBase = '';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $dataBase);

if($mysqli->error){
    die("falha ao conectar ao database: " . $mysqli->error);
}

?>
