<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/qrcode-page.css">
    <title>Compra Pix</title>
</head>
<body>



    <div id="qrcode-container">

     <h1>Validade do pagamento</h1>

     <div class="countdown-container">
      <div class="countdown-min">
         <p clas="text" id="minutos">0</p>
      </div>
      <p> : </p>
      <div class="countdown-seg">
         <p clas="text" id="segundos">0</p>
      </div>
     </div>

     <script src="javaScript/countdown.js"></script>


    <div class="qrcode">
        <?php
        require __DIR__ .'/vendor/autoload.php';

        use \App\Pix\Payload;
        use Mpdf\QrCode\QrCode;
        use Mpdf\QrCode\Output;

        $amount = isset($_GET['amount']) ? $_GET['amount'] : '0.00';

        $obPayload = (new Payload)->setPixKey('13904')
                    ->setDescription('Pagamento tecido')
                    ->setMerchantName('Magitec')
                    ->setMerchantCity('Joinville SC')
                    ->setAmount($amount) 
                    ->setTxid('MAGITEC');

        $payloadQrCode = $obPayload->getPayload();

        $obQrCode = new QrCode($payloadQrCode);

        $image = (new Output\Png)->output($obQrCode, 400);

        echo '<img id="qrcode" src="data:image/png;base64,' . base64_encode($image) . '" alt="Código QR">';


        echo '<p id="codigopix">' . print_r($payloadQrCode, true) . '</p>';

        ?>
    </div>
</div>
</body>
</html>
