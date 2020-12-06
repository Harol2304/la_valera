<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'librerias/correo/autoload.php';
require_once 'model/login.php';
class LoginController{

    public function __CONSTRUCT(){
        $this->model = new Login();
    }

    public function Index(){
        session_start();
        session_destroy();
        require_once 'view/login/login.php';
    }

    
    public function Nuevo(){
        $cli= new cliente();
        $id = $this->model->Ultimo_cliente();
        $ultimo_id = intval($id->id_cliente) + 1;
        require_once 'view/cliente/header_1.php';
        require_once 'view/cliente/cliente-nuevo.php';
        require_once 'view/footer.php';
            
    }


    public function Ingreso(){
        $correo_electronico=$_POST['correo_electronico'];
        $contrasena= base64_encode($_POST['contrasena']);
        $this->model->Ingresar($correo_electronico, $contrasena);
    }

    public function restablecer(){
        require_once 'view/login/restablecer.php';
    }

    public function enviar(){
        $correo=$_POST['correo_electronico'];
        $emp = $this->model->clave($correo);
        $clave = base64_decode($emp->contrasena);
        if ($clave != "") {
            $mail = new PHPMailer;
            $mail->isSMTP();
            //$mail->SMTPDebug = 2;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = "correos.valera@gmail.com";
            $mail->Password = "Valera1234";
            $mail->setFrom($correo, 'La Valera');
            $mail->addAddress($correo);
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Contraseña';
            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

            $mail->msgHTML("Hola : {$emp->nombre} {$emp->apellido}<br>
            Recibimos una solicitud donde pides tu clave:<br>
            Correo: {$emp->correo_electronico}<br>
            Clave: {$clave}", __DIR__) ;
            $mail->AltBody = 'This is a plain-text message body';
            $mail->SMTPOptions = array(
                'ssl' => [
                    'verify_peer' => false,
                    'verify_depth' => false,
                    'allow_self_signed' => true,
                ],
            );
            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo. "<br><a href='index.php'>Volver</a>";
            } else {
                
                echo 'hemos enviado tu contraseña a tu correo!<br><a href="index.php">Volver</a>';
                }

            //Section 2: IMAP
            //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
            //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
            //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
            //be useful if you are trying to get this working on a non-Gmail IMAP server.
            function save_mail($mail) {
                //You can change 'Sent Mail' to any other folder or tag
                $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
                //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
                $imapStream = imap_open($path, $mail->Username, $mail->Password);
                $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
                imap_close($imapStream);
                return $result;
            }
        }else{
            echo 'No se encontró ningun usuario con ese correo<br><a href="index.php">Volver</a>';
        }
    }
}
