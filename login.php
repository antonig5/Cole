<? session_start();
require_once('conexion/conexion.php')
?>
<!doctype html>
<html lang="en" style="background-color: #3e8ef7;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <title>Document</title>
</head>

<body style="background-color: #3e8ef7;">

  <div class="card  w-50  mt-5 mx-5 h-100 rounded-end" style=" left:285px; position:relative">
    <div class="card-body text-center ">


      <div class="col">
        <form class="row justify-content-center needs-validation was-validated  " novalidate="" method="POST" action="direccionar.php">
          <h3 class="  fw-bold fs-1" style="margin:70px">LOGIN</h3>
          <div class="col-md-4 ">
            <label for="validationDefault01" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" class="form-control" id="validationDefault01" aria-describedby="inputGroupPrepend" required="" name="email">
              <div class="invalid-feedback">
                Por favor ingrese su correo
              </div>
            </div>
          </div>

          <div class="col-md-4 ">
            <label for="validationCustom05" class="form-label">Password</label>
            <input type="password" class="form-control " id="validationCustom05" required maxlength="8" name="password">
            <div class="invalid-feedback">
              Por favor ingrese su contraseña
            </div>
          </div>

          <div class=" row justify-content-center col-7 pt-2">
            <input class="btn btn-primary" type="submit" name="envia">
          </div>
        </form>
      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="indexjs/app.js"></script>
</body>

</html>