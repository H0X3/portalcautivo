<?php
if(isset($_POST['email'])) {

<bold>// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "linamax010@gmail.com";
$email_subject = "Contacto HotsPot";

<bold>// Aquí se deberían validar los datos ingresados por el usuario</bold>
if(!isset($_POST['names']) ||
!isset($_POST['telefono']) ||
!isset($_POST['ciudad']) ||
!isset($_POST['correo'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['names'] . "\n";
$email_message .= "Telefono: " . $_POST['telefono'] . "\n";
$email_message .= "Ciudad: " . $_POST['ciudad'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n\n";



<bold>// Ahora se envía el e-mail usando la función mail() de PHP</bold>
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>