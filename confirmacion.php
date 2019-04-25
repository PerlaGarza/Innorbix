<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start(); 
include('conexion.php');
include("admin.php");
date_default_timezone_set('America/Monterrey');

$con = getdbdatos();


$correo = $_POST["correo"];
echo $correo;

if(isset($correo)) {
    $result = mysqli_query($conn,"SELECT correo, nombre, id_paciente FROM pacienteinfo WHERE correo='$correo'");
    $row = mysqli_fetch_assoc($result);
    $id_paciente = $row['id_paciente'];

    $token = bin2hex(openssl_random_pseudo_bytes(45));

    
    $expiracion = date('Y-m-d H:i:s', strtotime('+900 seconds'));
    $sql = "INSERT INTO resetpass (id, token, id_paciente, expiracion, usado) VALUES ('', '$token', '$id_paciente', '$expiracion', '')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    if ($row['correo'] == $correo) {

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'apikey';                 // SMTP username
    $mail->Password = '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';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('atencion@innorbitx.com', 'Innorbitx Consultorio Médico');
    $mail->addAddress('chosepro@gmail.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cambia tu contraseña';
    // $mail->Body    = 'Hola ' . $row["nombre"] . '!<br>Para cambiar tu contraseña haz click en el siguiente vinculo: Te la Kreiste we no hay vinculo xd </b>';
    $cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /><!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" /><!--<![endif]-->
        <!--[if (gte mso 9)|(IE)]>
        <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <!--[if (gte mso 9)|(IE)]>
        <style type="text/css">
          body {width: 600px;margin: 0 auto;}
          table {border-collapse: collapse;}
          table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
          img {-ms-interpolation-mode: bicubic;}
        </style>
        <![endif]-->
    
        <style type="text/css">
          body, p, div {
            font-family: verdana,geneva,sans-serif;
            font-size: 14px;
          }
          body {
            color: #838383;
          }
          body a {
            color: #1188E6;
            text-decoration: none;
          }
          p { margin: 0; padding: 0; }
          table.wrapper {
            width:100% !important;
            table-layout: fixed;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
          }
          img.max-width {
            max-width: 100% !important;
          }
          .column.of-2 {
            width: 50%;
          }
          .column.of-3 {
            width: 33.333%;
          }
          .column.of-4 {
            width: 25%;
          }
          @media screen and (max-width:480px) {
            .preheader .rightColumnContent,
            .footer .rightColumnContent {
                text-align: left !important;
            }
            .preheader .rightColumnContent div,
            .preheader .rightColumnContent span,
            .footer .rightColumnContent div,
            .footer .rightColumnContent span {
              text-align: left !important;
            }
            .preheader .rightColumnContent,
            .preheader .leftColumnContent {
              font-size: 80% !important;
              padding: 5px 0;
            }
            table.wrapper-mobile {
              width: 100% !important;
              table-layout: fixed;
            }
            img.max-width {
              height: auto !important;
              max-width: 480px !important;
            }
            a.bulletproof-button {
              display: block !important;
              width: auto !important;
              font-size: 80%;
              padding-left: 0 !important;
              padding-right: 0 !important;
            }
            .columns {
              width: 100% !important;
            }
            .column {
              display: block !important;
              width: 100% !important;
              padding-left: 0 !important;
              padding-right: 0 !important;
              margin-left: 0 !important;
              margin-right: 0 !important;
            }
          }
        </style>
        <!--user entered Head Start-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
         <!--End Head user entered-->
      </head>
      <body>
        <center class="wrapper" data-link-color="#1188E6" data-body-style="font-size: 14px; font-family: verdana,geneva,sans-serif; color: #838383; background-color: #ffffff;">
          <div class="webkit">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#ffffff">
              <tr>
                <td valign="top" bgcolor="#ffffff" width="100%">
                  <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td width="100%">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td>
                              <!--[if mso]>
                              <center>
                              <table><tr><td width="600">
                              <![endif]-->
                              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width:600px;" align="center">
                                <tr>
                                  <td role="modules-container" style="padding: 0px 0px 0px 0px; color: #838383; text-align: left;" bgcolor="#F3F3F3" width="100%" align="left">
                                    
        <table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%"
               style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
          <tr>
            <td role="module-content">
              <p></p>
            </td>
          </tr>
        </table>
      
        <table  border="0"
                cellpadding="0"
                cellspacing="0"
                align="center"
                width="100%"
                role="module"
                data-type="columns"
                data-version="2"
                style="padding:0px 0px 0px 0px;background-color:#f3f3f3;box-sizing:border-box;"
                bgcolor="#f3f3f3">
          <tr role="module-content">
            <td height="100%" valign="top">
                <!--[if (gte mso 9)|(IE)]>
                  <center>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-spacing:0;border-collapse:collapse;table-layout: fixed;" >
                      <tr>
                <![endif]-->
              
        <!--[if (gte mso 9)|(IE)]>
          <td width="600.000px" valign="top" style="padding: 0px 0px 0px 0px;border-collapse: collapse;" >
        <![endif]-->
    
        <table  width="600.000"
                style="width:600.000px;border-spacing:0;border-collapse:collapse;margin:0px 0px 0px 0px;"
                cellpadding="0"
                cellspacing="0"
                align="left"
                border="0"
                bgcolor="#f3f3f3"
                class="column column-0 of-1
                      empty"
          >
          <tr>
            <td style="padding:0px;margin:0px;border-spacing:0;">
                
        <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
          <tr>
            <td style="font-size:6px;line-height:10px;padding:20px 0px 20px 0px;background-color:#16192C;" valign="top" align="center">
              <img class="max-width" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica, arial, sans-serif;font-size:16px;max-width:30% !important;width:30%;height:auto !important;" src="https://marketing-image-production.s3.amazonaws.com/uploads/dc57843350a3f4fc0c2c7e01e55121eed9f64fc0a5d266c228c96de55d12632a2f0ecebcc6484d41d920b2bf7f325afa5339e54c34f59ca390b007b54aed4a3d.png" alt="" width="180">
            </td>
          </tr>
        </table>
      
        <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
          <tr>
            <td style="padding:18px 10px 18px 10px;line-height:22px;text-align:justify;"
                height="100%"
                valign="top"
                bgcolor="">
                <div>Hola ' . $row["nombre"] . ',</div>
    
    <div>Has&nbsp;solicitado reestablecer tu contrase&ntilde;a por favor presiona el bot&oacute;n siguiente para continuar, si no has&nbsp;sido tu quien ha solicitado el cambio has&nbsp;caso omiso a este mensaje.</div>
    
            </td>
          </tr>
        </table>
      
            </td>
          </tr>
        </table>
    
        <!--[if (gte mso 9)|(IE)]>
          </td>
        <![endif]-->
                <!--[if (gte mso 9)|(IE)]>
                      <tr>
                    </table>
                  </center>
                <![endif]-->
            </td>
          </tr>
        </table>
      <table border="0" cellPadding="0" cellSpacing="0" class="module" data-role="module-button" data-type="button" role="module" style="table-layout:fixed" width="100%"><tbody><tr><td align="center" bgcolor="#F3F3F3" class="outer-td" style="padding:0px 0px 0px 0px;background-color:#F3F3F3"><table border="0" cellPadding="0" cellSpacing="0" class="button-css__deep-table___2OZyb wrapper-mobile" style="text-align:center"><tbody><tr><td align="center" bgcolor="#007bff" class="inner-td" style="border-radius:6px;font-size:16px;text-align:center;background-color:inherit"><a style="background-color:#007bff;border:1px solid #333333;border-color:#007bff;border-radius:99px;border-width:1px;color:#ffffff;display:inline-block;font-family:verdana,geneva,sans-serif;font-size:14px;font-weight:normal;letter-spacing:0px;line-height:16px;padding:12px 18px 12px 18px;text-align:center;text-decoration:none"' 
      . "href='" 
      . "minimalprojects.me/innorbitx/nueva-password.php?token="
      . $token 
      ."'"
      . 'target="_blank">Cambiar contraseña</a></td></tr></tbody></table></td></tr></tbody></table>
        <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
          <tr>
            <td style="padding:28px 10px 18px 10px;line-height:22px;text-align:justify;"
                height="100%"
                valign="top"
                bgcolor="">
                <div>Gracias, cualquier problema contáctanos.</div>
            </td>
          </tr>
        </table>
      
        <table class="module"
               role="module"
               data-type="divider"
               border="0"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               style="table-layout: fixed;">
          <tr>
            <td style="padding:10px 0px 0px 0px;"
                role="module-content"
                height="100%"
                valign="top"
                bgcolor="">
              <table border="0"
                     cellpadding="0"
                     cellspacing="0"
                     align="center"
                     width="100%"
                     height="1px"
                     style="line-height:1px; font-size:1px;">
                <tr>
                  <td
                    style="padding: 0px 0px 1px 0px;"
                    bgcolor="#e0e0e0"></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      
        <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
          <tr>
            <td style="padding:18px 10px 18px 10px;line-height:22px;text-align:inherit;"
                height="100%"
                valign="top"
                bgcolor="">
                <div style="text-align: center;"><span style="font-size:11px;">*Toda tu informaci&oacute;n se encuentra segura, si tienes problemas para iniciar sesi&oacute;n contacta con nosotros <a href="mailto:atencion@innorbitx.com">atencion@innorbitx.com</a></span></div>
    
            </td>
          </tr>
        </table>
      
        <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
          <tr>
            <td style="background-color:#e4e4e4;padding:38px 0px 10px 0px;line-height:22px;text-align:justify;"
                height="100%"
                valign="top"
                bgcolor="#e4e4e4">
                <div style="text-align: center;"><span style="font-size:11px;">INNORBITX - Av. Manuel L. Barragan #456, San Nicolas de los Garza, Nuevo Le&oacute;n</span></div>
    
    <div style="text-align: center;">&nbsp;</div>
    
            </td>
          </tr>
        </table>
      
                                  </td>
                                </tr>
                              </table>
                              <!--[if mso]>
                              </td></tr></table>
                              </center>
                              <![endif]-->
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </center>
      </body>
    </html>';
    $mail->Body = $cuerpo;

    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>location.href='confirmacion.php'</script>";
} catch (Exception $e) {
    echo 'No se pudo enviar el mensaje. Mailer Error: ', $mail->ErrorInfo;
}
    }
}

?>

<!DOCTYPE html>
<html lang="en" style="overflow: hidden">
  <head>
    <title>INNORTBIX - Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utd-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  </head>



<body style="height: 100%">

    <div class="fondo pt-5 pb-5 text-center" style="height: 100%">
        <div class="container espacio-confirmacion mt-0">
            <div class="container espacio-confirmacion bg-white confirmacion-mensaje aparecer-icono">
            <p class="borde-superior text-left">Ya casi, solo uno paso mas!</p>
            <i class="far fa-check-circle fa-5x aparecer-icono" style="color: #0F6FFF;"></i>
                <p class="fluido text-dark confirmacion text-center mover-primero pb-0">Confirmación</p>
                <p class="fluido text-dark lead text-justify text-center aparecer-icono-lento">Si la dirección proporcionada coincide con alguna en nuestro gran expediente médico recibiras un mensaje para cambiar tu contraseña.</p>
                <div>
                <a href="index"><button type="button" class="btn btn-outline-primary text-center">Continuar</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



</body>
</html>