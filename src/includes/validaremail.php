<?php 

include 'conexion.php';
require ($_SERVER["DOCUMENT_ROOT"].'/PaginaDulzurasArtesanales/src/phpmailer/class.phpmailer.php');

$email = $_POST['emailRecup'];
 
if( $email != "" ){
   $sql = " SELECT * FROM usuario WHERE email = '$email' ";
   $resultado = mysqli_query($conn,$sql);
   if(mysqli_num_rows($resultado) > 0){
      $usuario = $resultado->fetch_assoc();
      $linkTemporal = generarLinkTemporal( $usuario['id'], $usuario['alias'] );
      if($linkTemporal){
        enviarEmail( $email, $linkTemporal );
        $respuesta->mensaje = '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contraseña </div>';
      }
   }
   else
      $respuesta->mensaje = '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
}
else
   $respuesta->mensaje= "Debes introducir el email de la cuenta";
 //echo json_encode( $respuesta );

      //$enlace = $_SERVER["SERVER_NAME"].'/pass/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
      //return $enlace;


 function generarLinkTemporal($idusuario, $username){
   // Se genera una cadena para validar el cambio de contraseña
   //$cadena = $idusuario;//.$username.rand(1,9999999).date('Y-m-d');
   //$token = sha1($cadena);
 
   //$conexion = new mysqli('localhost', 'root', '', 'ejemplobd');
   // Se inserta el registro en la tabla tblreseteopass
   //$sql = "INSERT INTO tblreseteopass (idusuario, username, token, creado) VALUES($idusuario,'$username','$token',NOW());";
   //$resultado = $conexion->query($sql);
   //if($resultado){
      // Se devuelve el link que se enviara al usuario
      $enlace = $_SERVER["SERVER_NAME"].'/PaginaDulzurasArtesanales/src/cambioContrasenia?idusuario='.MD5($idusuario);//.'&token='.$token;
      return $enlace;
   //}
   //else
      //return FALSE;
}
 
function enviarEmail( $email, $link ){
   $mensaje = '<html>
     <head>
        <title>Restablece tu contraseña</title>
     </head>
     <body>
       <p>Hemos recibido una peticion para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta peticion, haz clic en el siguiente enlace, si no hiciste esta peticion puedes ignorar este correo.</p>
       <p>Codigo Verificador:'.NumeroVerificador().'</p>       
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="'.$link.'"> Restablecer contraseña </a>
       </p>
     </body>
    </html>';
 
   $cabeceras = 'MIME-Version: 1.0' . '\r\n';
   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
   $cabeceras .= 'From: Codedrinks <dulzurasloboesta@gmail.com>' . '\r\n';
   // Se envia el correo al usuario
   //mail($email, "Recuperar contraseña", $mensaje, $cabeceras);


//    /////////////////////////////////////////////////
// $mail = new PHPMailer;

// $mail->SMTPOptions = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//     )
// );

// $mail->IsSMTP();                                      // Set mailer to use SMTP

// $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
// $mail->Port = 465;

// $mail->SMTPDebug = 2;  

// $mail->Debugoutput='html';  
//                                   // 
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'dulzurasloboesta@gmail.com';                // SMTP username
// $mail->Password = 'belenyjony121213';                  // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

// $mail->From = 'dulzurasloboesta@gmail.com';
// $mail->Password = 'belenyjony121213';   
// $mail->FromName = 'Lobo Está - Dulzuras Artesanales';
// //$mail->AddAddress('josh@example.net', '');  // Add a recipient
// //$mail->AddAddress('ellen@example.com');
// $mail->AddAddress($email);               // Name is optional

// $mail->IsHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Cambio de contraseña';
// $mail->Body    = $mensaje;//'This is the HTML message body <strong>in bold!</strong>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->Send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    exit;
// }


$para = $email;
$asunto = 'Prueba de SMTP local';
//$mensaje = 'adsadsa';//$mensaje;
//$cabeceras = 'From: dulzurasloboesta@gmail.com' . '\r\n' .
//'Reply-To: $email' . '\r\n' .
//'X-Mailer: PHP/' . phpversion();

if(mail($para, $asunto, $mensaje, $cabeceras)) {
echo "ok";
} else {
echo 'error';
}



}



function NumeroVerificador()
{
  $num = 1;
  while ( ($num % 6 != 0) or ($num % 4 !=0) ) {
    $num = rand(0,100000);
  }
  return (string)$num;
}

function EsCodigoValido($num){
  if ( ($num % 6 ==0) and ($num % 4 ==0) ) {
    return true;
  }
  else
  {
    return false;
  }
}




 ?>



