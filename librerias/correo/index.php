<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'correo/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "masternoreply@gmail.com";
$mail->Password = "Masternoreply1234";
$mail->setFrom('prueba@gmail.com', 'PepitoPerez');
$mail->addAddress('prueba@gmail.com', 'Ejemplo Clase');
$mail->Subject = 'Prueba de correo';
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->msgHTML('Envio de Correo', __DIR__);
$mail->AltBody = 'This is a plain-text message body';
$mail->addAttachment('img/images.jpg');

$mail->SMTPOptions = array(
    'ssl' =>[
        'verify_peer' => false,
        'verify_depth' => false,
        'allow_self_signed' => true,
    ],
);

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}

?>

