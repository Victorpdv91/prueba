<?php
//Guardado de los datos del formulario 
$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$servicio = $_POST['servicio']; //Sólo recibimos un dato
$check = $_POST['check']; //Recibimos todos los datos que fueron seleccionados

//Armado del mail
$to = 'sumail@mail.com';
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email
              \n Consulta por el siguiente servicio: $servicio 
              \n Mensaje o consulta: \n $comentarios \n"; 
$headers = "From: $email";

//Envió del mail
mail($to, $email_subject, $email_body, $headers); 
echo 'Pronto nos estaremos comunicando con usted!';
?>
<br>
<br>
<button><a href="index.html">Volver</a></button>