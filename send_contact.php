

<?php







//require("includes/class.phpmailer.php");







//DATOS DEL FORMULARIO DE CONTACTO.







$name = (isset($_POST['name'])  ? trim($_POST['name'])  : '---');



$maile = (isset($_POST['email'])  ? trim($_POST['email'])  : '---');



$tel = (isset($_POST['phone'])  ? trim($_POST['phone'])  : '---');



$msg = (isset($_POST['message'])  ? trim($_POST['message'])  : '---');







$cuerpo = "<html>



					<head>



						<title>AUDISTOCK WEB</title>						



					</head>



					<body>



						<div>



							<div style='width:100%;background-color:#ffffff'>



								<div><img src='http://www.audistock.com.uy/sitio/imgs/logo.jpg' alt='logo' /></div>



								<div class='head'></div>



							</div>



							<div style='font-family:arial;color:#333333;clear:both;margin-left:20px;margin-top:22px;margin-bottom:27px;'>



								<strong>NOMBRE:</strong> " . $name . "<br /><br />



								<strong>MAIL:</strong> " . $maile . "<br /><br />



								<strong>TELEFONO:</strong> " . $tel . "<br /><br />



								<strong>MENSAJE:</strong> " . $msg . "<br /><br />



							</div>



							<div class='footer'></div>



						</div>



					</body>






					</html>";







// $mail=new PHPMailer();







// $mail->Host       = "mail.lunar.com.uy"; // sets GMAIL as the SMTP server

// $mail->AddReplyTo  ($maile, "Sr./Sra.");

// $mail->From       = "juliana@otraalternativa.com";



// $mail->FromName   = "CONTACTO WEB.";



// $mail->Subject    = "CONSULTA WEB";



// $mail->Body       = $cuerpo;//HTML Body



// $mail->AltBody    = "This is the body when user views in plain text format"; //Text Body



// $mail->WordWrap   = 50; // set word wrap	



// $mail->AddAddress('juliana@otraalternativa.com',"Contacto Web");



// $mail->IsHTML(true); // send as HTML















// if(!$mail->Send()) {



	//echo "Mailer Error: " . $mail->ErrorInfo;



//} else {



//	echo "El mensaje fu&eacute; enviado. Gracias por su int&eacute;res";



//}


$para="tvarela@audistock.com.uy,jmenchaca@audistock.com.uy,pgagliardi@audistock.com.uy";

// título
$título = 'Contacto Web';
$mensaje = wordwrap($cuerpo,70);
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$respuesta=mail($para, $título, $mensaje, $cabeceras);
if ($respuesta==1) {
echo "El mensaje fu&eacute; enviado. Gracias por su int&eacute;res";
}else{
	echo "Error al enviar el email";
}

?>