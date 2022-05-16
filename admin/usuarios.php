<?php
require('../conexion/conexion.php');




$busqueda = $base_de_datos->query("Select * from usuarios, tipo_user where usuarios.idTipo = tipo_user.idTipo");
$arrDatos = $busqueda->fetchAll(PDO::FETCH_ASSOC);
if (isset($_POST['agregar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $password = $_POST['contraseña'];
    $pass_cifrado = password_hash($password, PASSWORD_DEFAULT, array("cons" => 12)); //encripta lo que hay en la variable password
    $rol = $_POST['tipo'];

    $sql = "INSERT INTO usuarios (idTipo, nombre,apellido, contraseña, email) values ( ?,?, ?, ?,?)";
    $resultado = $base_de_datos->prepare($sql); //$base es el nombre de la conexión
    $resultado->execute(array($rol, $nombre, $apellido, $pass_cifrado, $email));

    header("Location:usuarios.php");
}

?>
<? include('../menu/header.php') ?>
<!DOCTYPE html>
<html lang="en" class="wrapper" id="pages">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <div id="page" class="wrapper">
        <div class="table-responsive">
            <table class="table ">
                <th class="bg-primary bg-bordered" scope="col">Id</th>
                <th class="bg-primary" scope="col">tipo</th>
                <th class="bg-primary" scope="col">nombre</th>
                <th class="bg-primary" scope="col">apellido</th>
                <th class="bg-primary" scope="col">email</th>
                <th class="bg-primary" scope="col">contraseña</th>
                <th class="bg-primary" scope="col">Action</th>
                <th class="bg-primary" scope="col"></th>
</body>



<?php

/* var_dump($arrDatos);*/
/*Recorremos todos los resultados, ya no hace falta invocar más a fetchAll como si fuera fetch...*/
foreach ($arrDatos as $muestra) {
?>
    <tr>

        <td> <?php echo $muestra['idUser'] ?> </td>
        <td> <?php echo $muestra['tipoUser'] ?> </td>
        <td> <?php echo $muestra['nombre'] ?> </td>
        <td> <?php echo $muestra['apellido'] ?> </td>
        <td> <?php echo $muestra['email'] ?> </td>
        <td><?php echo /*$persona->clave*/ '°°°°°°°' ?></td>


        <td>
            <a href="eliminar.php?idUser=<?php echo $muestra['idUser'] ?> " class="btn btn-primary">
                eliminar
            </a>

        </td>

        <td>
            <a href="actualizar.php?idUser=<?php echo $muestra['idUser'] ?> " class="btn btn-primary">
                editar
            </a>
        </td>

    </tr>

<?php
}
?>

</table>
<tr>
    <form action="" method="post" class="row g-3">
        <select name="tipo" class=" form-select col-auto mx-5" aria-label=" Default select example" style="width: 10rem;">
            <?php
            $sql = "SELECT * FROM tipo_user ";
            $resultado = $base_de_datos->prepare($sql);
            $resultado->execute(array());
            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            ?>
                ?>
                <option value="<?php echo $registro['idTipo']; ?>"><?php echo $registro['tipoUser'] ?></option>
            <?php
            }


            ?>
        </select>
        <input type="text" name="nombre" placeholder="Nombre" width="2px" class="form-control col-md-1 me-5">
        <input type="text" name="apellido" placeholder="Apellido" class="form-control col-md-1 me-5">
        <input type="email" name="correo" placeholder="Email" aria-describedby="emailHelp" class="form-control col-md-2 me-5">
        <input type="password" name="contraseña" placeholder="Contraseña" aria-describedby="passwordHelpInline" class="form-control col-md-2" id=" inputPassword2">

        <input type="submit" name="agregar" class="btn btn-primary col-md-1 mx-3" value="Agregar">
    </form>

</tr>
<script src="../indexjs/app.js"></script>

</html>