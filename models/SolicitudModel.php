<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

class Solicitud_model
{
    private $db;
    private $solicitud;


    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->solicitud = array();
    }

    public function enviar($id, $serial, $prove, $esta, $iden, $nombre, $ambiente, $correo, $mensaje)
    {


        $body = "IdActivo: " . $id . "<br> Serial: " . $serial . "<br> proveedor: " . $prove . "<br> Estado: " . $esta . "<br> Identificacion: " . $iden . "<br>Nombre: " . $nombre . "<br>Ambiente: " . $ambiente . "<br>Correo: " . $correo . "<br>Mensaje: " . $mensaje;

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'SMTP.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'johanrodriguezbermudez@gmail.com';                     // SMTP username
            $mail->Password   = 'plgy atua sxhx jphi';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('johanrodriguezbermudez@gmail.com', $nombre);
            $mail->addAddress('johanrodriguezbermudez@gmail.com', $nombre);     // Add a recipient


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Solicitud de Activo';
            $mail->Body    = $body;
            $mail->AltBody = 'Registrar prestamo';

            $mail->send();
            echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';
        } catch (Exception $e) {
            echo 'hubo error al enviar el mensaje:', $mail->ErrorInfo;
        }
    }

    public function enviarToken($correo)
    {

        $sql = "SELECT * FROM usuarios Where Correo = '$correo' ";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $correo_v = $row['Correo'];
            $user_id = $row['idUsuario'];
        }


        if (isset($correo_v)) {

            $nombre = 'Usuario prueba';

            $gen = md5(uniqid(mt_rand(), false));

            $consulta = $this->db->query("UPDATE usuarios SET token_password = '$gen', password_request=1 Where idUsuario = $user_id");
            //$resultado = mysqli_fetch_array($consulta);
            if ($consulta > 0) {
                $url = $_SERVER["SERVER_NAME"] . '/plantillaInventory/ejecutar.php?c=Solicitud&a=indexcambiaP&user_id=' . $user_id . '&token=' . $gen;

                $asunto = 'Recuperar contraseña - Sistema de Inventarios';
                $body = "Hola $nombre: <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>Cambiar Contraseña</a>";
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = 0;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'SMTP.gmail.com';                       // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'johanrodriguezbermudez@gmail.com';                     // SMTP username
                    $mail->Password   = 'plgy atua sxhx jphi';                               // SMTP password
                    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom('johanrodriguezbermudez@gmail.com', $nombre);
                    $mail->addAddress('johanrodriguezbermudez@gmail.com', $nombre);     // Add a recipient


                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $asunto;
                    $mail->Body    = $body;
                    $mail->AltBody = 'Cambio contraseña';

                    $mail->send();
                    echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';
                } catch (Exception $e) {
                    echo 'hubo error al enviar el mensaje:', $mail->ErrorInfo;
                }
            }
        } else {
            echo '<script>
    alert("Correo no registrado");
    window.history.go(-1);
    </script>';
        }
    }

    public function cambiarContrasena($id, $token, $contra1, $contra2)
    {

        $sql = "SELECT * FROM usuarios where idUsuario = $id";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $token_base = $row['token_password'];
        }

        if ($token_base == $token) {
            if ($contra1 == $contra2) {
                $pass_cifrada = password_hash($contra1, PASSWORD_DEFAULT);
                $resultado = $this->db->query("UPDATE usuarios SET Contrasena = '$pass_cifrada' WHERE idUsuario = $id");
                echo '<script>
                alert("Contraseña Actualizada");
                </script>';
                echo '<script>
                window.location="index.php";
                </script>';
            } else {
                echo '<script>
                alert("Las contraseñas no coinciden");
                window.history.go(-1);
                </script>';
            }
        } else {
            echo '<script>
            alert("datos invalido");
            window.history.go(-1);
            </script>';
        }
    }
}
