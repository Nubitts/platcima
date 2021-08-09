<?php

include('connecto.php');

$sessv = $con->fetchAssociative('SELECT max(id_session) as idsess FROM sessions_ ', array(' '));
$vidsession = $sessv['idsess'];

$enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$cp = parse_url($enlace_actual, PHP_URL_QUERY);

//$component parameter is PHP_URL_QUERY
parse_str($cp, $cp1);

$count = $con->executeStatement('UPDATE orders SET payment_id = ?, payment_type = ?, status_ = ?, site_id = ?, processing_mode = ? WHERE id_session = ?', 
array($cp1['payment_id'], $cp1['payment_type'], $cp1['status'], $cp1['site_id'], $cp1['processing_mode'], $vidsession));

$estatus  = $cp1['status'] == 'pending' ? 'Pendiente' : 'Pagado';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="dist/favicon.png">

    <title>::Wolpic:: Convierte tus fotos en hermosos y prácticos cuadros</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="dist/font/font-fileuploader.css" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/alertifyjs/build/css/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="node_modules/alertifyjs/build/css/themes/default.min.css" />

    <script src="node_modules/alertifyjs/build/alertify.min.js"></script>

    <link href="dist/jquery.fileuploader.min.css" media="all" rel="stylesheet">
    <link href="dist/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
    <link href="dist/jquery.fileuploader-theme-gallery.css" rel="stylesheet" type="text/css" />
    <link href="dist/style.css" rel="stylesheet" type="text/css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            line-height: normal;
            background-color: #fff;

            margin: 0;
        }
    </style>
</head>

<body>

    <header>
        <img class="logo" src="dist/logo.png" alt="wolpic" />
    </header>

    <form>
        <div id="feed">
            <div class="top" style="width:100%;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-sm-9">
                            <h4 class="detalle"><b>Detalle de la operación</b></h4>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <a href="index.php" data-toggle="modal" data-target="#" id="btn-Checkout" class="btn btn-danger boton-siguiente">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <table class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Concepto</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tipo de pago</td>
                                <td><?php echo $cp1['payment_type'] ?></td>
                            </tr>
                            <tr>
                                <td>Estado de la operación</td>
                                <td><?php echo $estatus ?></td>
                            </tr>
                            <tr>
                                <td>Folio de operación</td>
                                <td><?php echo $cp1['payment_id'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    </form>

</body>

</html>