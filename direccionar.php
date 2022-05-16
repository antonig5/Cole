<?php
session_start();
require("conexion/conexion.php");

if (!isset($_POST["gmail"]) and !isset($_POST["envia"])) {
    header("Location:login.php");
} else if (isset($_POST["envia"])) {

    try {

        $login =             htmlentities(addslashes($_POST["email"]));
        $password =          htmlentities(addslashes($_POST["password"]));
        $contador = 0;

        $sql = "SELECT * FROM usuarios WHERE email= :ema";
        $resultado = $base_de_datos->prepare($sql);
        $resultado->execute(array(":ema" => $login)); //marcador login se corresponde con lo que el usuario introdujo en el cuadro de texto login
        if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['name'] = $registro['nombre'];
            $_SESSION['last'] = $registro['apellido'];
            $_SESSION['id'] = $registro['idUser'];


            if (password_verify($password, $registro['contraseña'])) {

                $valida =            $registro['idTipo'];
                $nombre =            $registro['email'];
                $usuario =           $registro['contraseña'];
                $contador++;
            }
        }

        if ($contador > 0) {

            if ($valida == 1) {
                header("Location:admin/index.php");
            } else if ($valida == 2) {
                header("Location:funcionario/index.php");
            }
        } else {
            header("Location:login.php");
        }
        $resultado->closecursor();
        $base_de_datos->exec("set character set utf8");
    } catch (Exception $e) {
        die("error" . $e->getMessage());
    }
}
