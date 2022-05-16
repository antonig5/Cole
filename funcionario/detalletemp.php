<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" autocomplete="off">

        <?php
        require("../conexion/conexion.php");
        if (!isset($_GET["buscarm"]) and !isset($_GET['agr'])) {
            $idestudiante = $_GET['ide'];
            $nombre = $_GET['nomb'];
            $apellido = $_GET['ape'];
            $usuario = $_GET['user'];
            $auxiliar = $_GET['nombaux'];
        } else {
            $idestudiante = $_GET['ide'];
            $nombre = $_GET['nomb'];
            $apellido = $_GET['ape'];
            $usuario = $_GET['user'];
            $auxiliar = $_GET['nombaux'];
        }


        ?>

        <table align="center">
            <tr>
                <td>
                <td>
                    <h4>DATOS DEL ESTUDIANTE</h4>
                </td>
                </td>
            </tr>
            <tr>
                <td>Identificación<input type="text" name="ide" readonly value="<?php echo $idestudiante ?>"></td>
                </td>
            </tr>
            <tr>
                <td>Nombre<input type="text" name="nomb" readonly value="<?php echo $nombre ?>">
                <td>Apellido<input type="text" name="ape" value="<?php echo $apellido ?>"></td>
            </tr>
            <input type="hidden" name="user" value="<?php echo $usuario ?>">
            <tr>
                <td>Funcionario<input type="text" name="nombaux" value="<?php echo $auxiliar ?>"></td>
                <td> <select name="grado">
                        <option>Escoja el grado</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></td>
            </tr>
        </table>


        <table align="center" border="1" bordercolor="red">
            <th>Buscar</th>
            <th>Nombre</th>
            <th>Horas</th>
            <th colspan="2">Acción</th>

            <tr>
                <td>Código<input type="text" style="width: 35px; height: 20px" name="codi"><input type="submit" name="buscarm" value="Busca"><input type="hidden" name="codpro"></td>
                <?php
                if (isset($_GET['buscarm'])) {
                    $busca = $_GET['codi'];
                    $sql = "SELECT  * from materias  where idMa=:co";
                    $resultado = $base_de_datos->prepare($sql);
                    $resultado->execute(array(":co" => $busca));
                    if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

                ?>
                        <td><input type="text" name="mate" value=" <?php echo $registro['materia']; ?>"></td>
                        <td><input type="text" name="hora" style="width: 50px; height: 20px" value=" <?php echo $registro['horas']; ?>"></td>
                        <td><input type="submit" name="agr" value="Agregar"></td>
            </tr>
        </table>
        <input type="text" name="codm" value="<?php echo $registro['idMa']; ?>">
<?php
                    }
                }
                if (isset($_GET['agr'])) {


                    $codigo = $_GET['codm'];
                    $nombrem = $_GET['mate'];
                    $hm = $_GET['hora'];


                    $sql = "INSERT INTO detalletemporal (idMa) values (:co)";
                    $resultado = $base_de_datos->prepare($sql); //$base es el nombre de la conexión
                    $resultado->execute(array(":co" => $codigo));
                }
                $registros = $base_de_datos->query("SELECT * from detalletemporal ")->fetchALL(PDO::FETCH_OBJ);
?>
<table align="center" border="" bordercolor="orange">
    <th>Código</th>
    <th>Nombre</th>
    <th>Horas</th>


    <tr>
        <?php

        $contador = 0;
        foreach ($registros as $materias) : ?>

            <td><?php echo $materias->idMa ?></td>
            <?php $codmateri = $materias->idMa;
            $sql = "SELECT * from materias WHERE idMa = :co";
            $resultado = $base_de_datos->prepare($sql);
            $resultado->execute(array(":co" => $codmateri));
            $registro = $resultado->fetch(PDO::FETCH_ASSOC);
            ?>
            <td><?php echo $registro['materia']; ?></td>
            <td><?php echo $registro['horas']; ?></td>
            <?php $contador = $contador + 1; ?>
    </tr>
    <tr>

    <?php
        endforeach;

    ?>

</table>
<table align="center">
    <tr>
        <th colspan="4">Total materias a matricular</th>
        <th></th>

        <td colspan="3">
        <td>
        <td>
        <td><?php echo $contador; ?></td>
        </td>
        </td>
        </td>
    </tr>

    <tr>
        <td> <a href="matricular.php?id=<?php echo $idestudiante ?> & nomb=<?php echo $nombre ?>  & contador=<?php echo $contador ?> & iduser=<?php echo $usuario ?> & nombaux=<?php echo $auxiliar ?>"><input align="center" type="button" name="matricular" value="Matricular"></a></td>
    </tr>
</table>



    </form>
</body>

</html>