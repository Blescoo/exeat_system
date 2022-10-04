<?php

require_once("qrcode.php");

//---------------------------------------------------------

print("");

$qr = new QRCode();

// QR_ERROR_CORRECT_LEVEL_L : 7%
// QR_ERROR_CORRECT_LEVEL_M : 15%
// QR_ERROR_CORRECT_LEVEL_Q : 25%
// QR_ERROR_CORRECT_LEVEL_H : 30%
$qr->setErrorCorrectLevel(QR_ERROR_CORRECT_LEVEL_H);


$qr->setTypeNumber(5);

$qr->addData("arubiewe");

$qr->make();

$qr->printHTML();

//---------------------------------------------------------

// print("<h4></h4>");


// $qr = QRCode::getMinimumQRCode("ARU", QR_ERROR_CORRECT_LEVEL_L);

// $qr->printHTML();

?>
