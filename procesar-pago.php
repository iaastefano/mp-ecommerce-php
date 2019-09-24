<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// var_dump($_REQUEST);

header("Location: ".$_REQUEST['back_url'] . '?method=' . $_REQUEST['payment_method_id']);
?>

<h1>PROCESAR PAGO</h1>