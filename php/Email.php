<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$texto_concatenado = 'Nombre: '.$nombre.'Email: '.$email.' Telefono: '.$telefono.' Mensaje: '.$mensaje;

echo $nombre

if (mail('consultas@aldatec.com.ar', 'Consulta Web' , $texto_concatenado))
{ echo "Mensaje enviado exitosamente";}
else
{
  echo "Error al tratar de enviar el mensaje al servidor";
}

?>