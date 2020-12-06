<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'librerias/correo/autoload.php';



require_once 'model/cliente.php';

class ClienteController{

private $model;

   
    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }

    public function Index(){
            require_once 'view/cliente/header_1.php';
            require_once 'view/cliente/cliente.php';
            require_once 'view/footer.php';
        
    }


        //
        //session_start();
        //validar si hay datos
        //if(!isset($_SESSION['id'])){
          //  header('location: index.php?c=login');
        //}else{
           // $cli = new Cliente();
            //$sesion = $_SESSION['id'];
            //if(isset($_REQUEST['id_cliente'])){
              //  $cli = $this->model->Obtener($_REQUEST['id_cliente']);
            
           // } */
    
    public function Crud(){
            require_once 'view/cliente/header_1.php';
            require_once 'view/cliente/cliente-editar.php';
            require_once 'view/footer.php';
        
  }




       public function Nuevo(){
       
            require_once 'view/cliente/header_1.php';
            require_once 'view/cliente/cliente-nuevo.php';
            require_once 'view/footer.php';
        
    }

  
    public function Guardar(){
        $cli = new Cliente();

        $cli->nombre = $_REQUEST['nombre'];
        $cli->apellido = $_REQUEST['apellido'];
        $cli->identificacion = $_REQUEST['identificacion'];
        $cli->direccion = $_REQUEST['direccion'];
        $cli->telefono = $_REQUEST['telefono'];
        $cli->correo_electronico  = $_REQUEST['correo_electronico'];
        $cli->fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $cli->contrasena = base64_encode(uniqid());
        $this->model->Registrar($cli);

        if($cli->correo_electronico != ""){
            $correo = $cli->correo_electronico;
            $clave   = base64_decode($cli->contrasena);
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
            $mail->Subject = 'Asignación de usuario';
            //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

            $mail->msgHTML("Hola : {$cli->nombre} {$cli->apellido}<br>
            Para ingresar a nuestro sistema La Valera, debes ingresar los siguientes datos:<br>
            Correo: {$cli->correo_electronico}<br>
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
 
        } 
        header('Location: index.php?c=cliente');
    }


    public function Editar(){
        $cli = new Cliente();

       
        $cli->nombre = $_REQUEST['nombre'];
        $cli->apellido = $_REQUEST['apellido'];
        $cli->identificacion = $_REQUEST['identificacion'];
        $cli->id_cliente = $_REQUEST['id_cliente'];
        $cli->direccion = $_REQUEST['direccion'];
        $cli->telefono = $_REQUEST['telefono'];
        $cli->correo_electronico  = $_REQUEST['correo_electronico'];
        $cli->fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
        $cli->contrasena = $_REQUEST['contrasena'];
        $this->model->Actualizar($cli);

        header('Location: index.php?c=cliente');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_cliente']);
       header('Location: index.php?c=cliente');
    }
    public function consul(){
        require_once 'view/cliente/header_1.php';
        require_once 'view/cliente/cliente-consultar.php';
    }
}
?>