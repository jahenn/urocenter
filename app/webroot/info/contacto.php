<pre>
	<?php 

	print_r($_POST);

	?>

</pre>


<?php 
$request = $_POST;
if(isset($request['data']['form'])){
	$request = $request['data']['form'];

	$nombre = $request['nombre'];
	$email = $request['email'];
	$mensaje = $request['mensaje'];


// mail('jjuarez007@gmail.com', 'contacto', $nombre.'\n'.$mensaje, "From: $email");



}


?>



<?php
require 'mailer/PHPMailerAutoload.php';
require 'password.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 2;//3                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jjuarez007@gmail.com';                 // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'jjuarez007@gmail.com';
$mail->FromName = 'Urocenter';
$mail->addAddress('urocenternet@gmail.com', $nombre);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
$mail->addBCC('jjuarez007@gmail.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Formulario de Contacto';
$mail->Body    = "<html>
<head>
	<title></title>
</head>
<body>
	<h1>$nombre</h1>
	$mensaje

	<br>
	Correo Electronico: $email
</body>
</html>";
// $mail->AltBody = $mensaje;

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('Location: Thanks.html');
}