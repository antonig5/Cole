<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Matricula</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php
        if (!isset($_GET["buscar"])) {
            $usuario = $_GET['iduser'];
            $auxiliar = $_GET['nombaux'];
        } else {
            $usuario = $_GET['iduser'];
            $auxiliar = $_GET['nombaux'];
        }

        include("../conexion/conexion.php");

        ?>

        <table align="center">

        </table>
        <input type="hidden" name="iduser" value="<?php echo $usuario ?>">
        <input type="hidden" name="nombaux" value="<?php echo $auxiliar ?>">


        <h3 align="center"> MATRICULAR</h3>
        <h3 align="center">Usuario: <?php echo $auxiliar ?></h3>
        <table align="center" border="1" bordercolor="red">

            <tr>
                <td colspan="3">
                    <h4 align="center">Datos del estudiante</h4>
                </td>
            </tr>
            <tr>
                <td>Identificación<input type="text" name="ide"><input type="submit" name="buscar" value="Buscar"></td>

                <?php
                require('../conexion/conexion.php');
                if (isset($_GET["buscar"])) {
                    $busqueda = $_GET['ide'];
                    $sql = "SELECT  * from estudiantes  where idEs=:id";
                    $resultado = $base_de_datos->prepare($sql);
                    $resultado->execute(array(":id" => $busqueda));
                    if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        $idestudiante = $registro['idEs'];
                        $nombre = $registro['Enombre'];
                        $apellido = $registro['Eapellido'];
                        $usuario = $_GET['iduser'];
                        $auxiliar = $_GET['nombaux'];

                ?>
    </form>
    <form action="detalletemp.php" method="get">
        <td>Nombre<input type="text" name="nomb" readonly value="<?php echo $nombre ?>">
        <td>Apellido<input type="text" name="ape" value="<?php echo $apellido ?>"></h3>
        </td>
        </tr>
        <td colspan="2">Identificación<input type="text" name="ide" readonly value="<?php echo $idestudiante ?>"></td>
        </tr>
        <input type="hidden" name="user" value="<?php echo $usuario ?>">
        <td colspan="2">Funcionario<input type="text" name="nombaux" readonly value="<?php echo $auxiliar ?>"></table>


            </table>
    <?php

                    } else {
                        echo "No existe estudiante con identificación $busqueda";
                        header("Location:registrar.php");
                    }
                }
    ?>

    <br>
    <h4 align="center">Agregar Materias</h4>
    <table align="center">
        <tr>
            <td><input type="submit" name="cargar" value="Agregar"></td>
            <td><input type="button" name="cerrar" value="Cerrar" onmouseup="self.close() "></td>
        </tr>

        <?php


        ?>

    </table>
    </form>
    </form>
</body>

</html>