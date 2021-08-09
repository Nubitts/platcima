<?php

//include('connecto.php');

$head = json_decode(file_get_contents("php://input"));

$cantidad = $head->photos;
$total = $head->total;

//$mpp = $con->fetchAssociative('SELECT public, access FROM parammp', array(''));

//$access = $mpp['access'];
//$public = $mpp['public'];

$access = "TEST-759566625956648-080618-a748294864597cd21507bbdbea0d1378-446358880";
$public = "TEST-62c2e7cc-4e79-4883-b60f-2db4b7a75f44";

$titulo = "CIMA Educativa (" . $cantidad . ") colegiatura";

/* if ($cantidad == 3) {
    $cantidad = 1;
} */

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
//MercadoPago\SDK::setAccessToken('TEST-6645816648577098-051717-b42e960aed3fa3d25ab69433be88593b-446358880');
MercadoPago\SDK::setAccessToken($access);


$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $titulo;
$item->description = "";
$item->quantity = $cantidad;
$item->unit_price = $total;
$preference->items = array($item);

//$url_regre = "https://preview.wolpic.com//feedback.php";
$url_regre = "http://localhost/pictures/feedback.php";

$preference->back_urls = array(
    "success" => $url_regre,
    "failure" => $url_regre,
    "pending" => $url_regre
);


$preference->auto_return = "approved";

$preference->save();

$response = array(
    'id' => $preference->id,
    'public' => $public
);




echo json_encode($response);
