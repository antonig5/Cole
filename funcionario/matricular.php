<? include('../menu/headerF.php');

require_once('../conexion/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body style="background-color: #3e8ef7;">
    <div class="row justify-content-center mt-5 w-80  mb-5 mx-5 h-100">
        <div class="card h-100">
            <form class="mt-5">
                <div class="row justify-content-center mb-3 ">

                    <div class="col-md-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre</label>
                        <input type="email" class="form-control" id="inputUsername">
                    </div>
                </div>
                <div class="row justify-content-center mb-3 ">

                    <div class="col-md-3">
                        <label for="formGroupExampleInput" class="form-label">Apellido</label>
                        <input type="email" class="form-control" id="inputUsername">
                    </div>
                </div>
                <div class="row justify-content-center mb-3 mt-3">

                    <div class="col-md-3">
                        <label for="formGroupExampleInput" class="form-label">Grado</label>
                        <select class="form-select" aria-label="Default select example">
                            <?php
                            $sql = "SELECT * FROM grados";
                            $resultado = $base_de_datos->prepare($sql);
                            $resultado->execute(array());
                            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                ?>
                                <option value="<?php echo $registro['idGrado']; ?>"><?php echo $registro['grado'] ?></option>
                            <?php
                            }


                            ?>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center mb-3 ">

                    <div class="col-md-3">
                        <label for="formGroupExampleInput" class="form-label">Materias</label>
                        <input type="email" class="form-control" id="inputUsername3">
                    </div>
                </div>

                <div class="row justify-content-center ">
                    <div class="col-md-2 mt-3 me-5 mb-5">
                        <button type="submit" class="btn btn-primary btn-lg " style="width: 15rem;">Matricular</button>
                    </div>

                </div>

            </form>
</body>

</html>