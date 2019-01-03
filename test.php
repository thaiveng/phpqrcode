<?php 
require_once('vendor/autoload.php');

use Endroid\QrCode\QrCode;

// $qrCode = new QrCode('This is for testing');

// header('Content-Type: '.$qrCode->getContentType());
// echo $qrCode->writeString();
// 
$qrCode = new QrCode('សួស្តី');
$qrCode->setSize(300);

// Set advanced options
$qrCode->setWriterByName('png');
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
// $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
$qrCode->setForegroundColor(['r' =>16, 'g' => 150, 'b' => 72, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
// $qrCode->setLabel('Scan the code', 16, __DIR__.'/../assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
// $qrCode->setLogoPath(__DIR__.'/../assets/images/symfony.png');
$qrCode->setLogoSize(150, 200);
$qrCode->setRoundBlockSize(true);
$qrCode->setValidateResult(false);
$qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

// Directly output the QR code
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

// Save it to a file
$qrCode->writeFile(__DIR__.'/qrcode.png');

// Create a response object
$response = new QrCodeResponse($qrCode);

 ?>