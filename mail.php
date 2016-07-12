<?php
header('Access-Control-Allow-Origin: *');
try {
$título = 'Matchpad email';

// mensaje
$mensaje = '
<html>
<head>
  <title>Matchpad</title>
</head>
<body>
    <p>Name: ' . $_POST["name"] . '</p>
    <p>Email: ' . $_POST["email"] . '</p>
                                  
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: ezequielcarrosalle@gmail.com' . "\r\n" .
    'Reply-To: ezequielcarrosalle@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
echo json_encode(mail("ezequielcarrosalle@gmail.com", "matchpad", $mensaje,$cabeceras));
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
