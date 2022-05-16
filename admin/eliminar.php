<?php
require('../conexion/conexion.php');


$id = $_GET['idUser'];
$eliminar = ("Delete from usuarios where idUser=?");
$sentencia = $base_de_datos->prepare($eliminar);
$sentencia->execute(array($id));


header('Location:usuarios.php');
