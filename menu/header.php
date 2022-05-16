<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.jpg" alt="" width="100" height="27" class="d-inline-block align-text-top">
                Los Andes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item pe-2">
                        <select class="form-select " aria-label="Default select example">
                            <option selected>Estudiantes</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </li>
                    <li class="nav-item dropdown pe-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Matriculas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </li>
                    <li class="nav-item pe-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Materias</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </li>

                </ul>
                <form class="d-flex">

                    <div class="btn-group pe-2" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-outline-ligth" id="id-sun">claro</button>
                        <button type="button" class="btn btn-outline-dark" id="id-moon">oscuro</button>

                    </div>
                    <a href="../login.php" class="btn btn-outline-warning">Cerrar Sesion</a>

                </form>
            </div>
        </div>
    </nav>
</body>

</html>