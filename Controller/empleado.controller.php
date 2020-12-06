<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'librerias/correo/autoload.php';

require_once 'model/empleado.php';

class EmpleadoController{

    private $model;

   
    public function __CONSTRUCT(){
        $this->model = new Empleado();
    }
  
    public function Index(){
        require_once 'view/empleado/header_2.php';
        require_once 'view/empleado/empleado.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $emp = new Empleado();

       
        if(isset($_REQUEST['id_empleado'])){
            $emp = $this->model->Obtener($_REQUEST['id_empleado']);
        
       }
        require_once 'view/empleado/header_2.php';
        require_once 'view/empleado/empleado-editar.php';
        require_once 'view/footer.php';
  }

   
  public function Nuevo(){
   
        require_once 'view/empleado/header_2.php';
        require_once 'view/empleado/empleado-nuevo.php';
        require_once 'view/footer.php';
    

  }

    

    public function Guardar(){
        $emp = new Empleado();

        
        $emp->nombre = $_REQUEST['nombre'];
        $emp->apellido = $_REQUEST['apellido'];
        $emp->identificacion = $_REQUEST['identificacion'];
        $emp->direccion = $_REQUEST['direccion'];
        $emp->correo_electronico  = $_REQUEST['correo_electronico'];
        $emp->telefono = $_REQUEST['telefono'];
        $emp->contrasena = base64_encode(uniqid());
        $emp->id_valera = $_REQUEST['id_valera'];
        $this->model->Registrar($emp);

        if($emp->correo_electronico != ""){
            $correo = $emp->correo_electronico;
            $clave   = base64_decode($emp->contrasena);
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

            $mail->msgHTML("Hola : {$emp->nombre} {$emp->apellido}<br>
            Para ingresar a nuestro sistema La Valera, debes ingresar los siguientes datos:<br>
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
 
        } 
        header('Location: index.php?c=empleado');
    }


    public function Editar(){
        $emp = new Empleado();

       
        $emp->nombre = $_REQUEST['nombre'];
        $emp->apellido = $_REQUEST['apellido'];
        $emp->id_empleado = $_REQUEST['id_empleado'];
        $emp->identificacion = $_REQUEST['identificacion'];
        $emp->direccion = $_REQUEST['direccion'];
        $emp->correo_electronico  = $_REQUEST['correo_electronico'];
        $emp->telefono = $_REQUEST['telefono'];
        $emp->contrasena = $_REQUEST['contrasena'];
        $emp->id_valera = $_REQUEST['id_valera'];
        $this->model->Actualizar($emp);


        header('Location: index.php?c=empleado');
    }

   
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_empleado']);
       header('Location: index.php?c=empleado');
    }
   
    public function consul(){
        require_once 'view/empleado/header_2.php';
        require_once 'view/empleado/empleado-consultar.php';
    }
}
?>