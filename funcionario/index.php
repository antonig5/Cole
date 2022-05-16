<?php
session_start();
?>
<? include('../menu/headerF.php') ?>

<!DOCTYPE html>
<html lang="en">

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


        <div class="card text-center " style="height: 33.6rem;">

            <div class="card-body mb-5">
                <h5 class="card-title fw-bold" style="font-size: 200px;">Bienvenido</h5>
                <p class="card-text fw-bold fs-1"><? echo $_SESSION['name']; ?> <? echo $_SESSION['last']; ?></p>
                <p class="card-text fw-bold fs-1">Funcionario </p>
            </div>
        </div>


</body>

<script src="../indexjs/app.js"></script>

</html>