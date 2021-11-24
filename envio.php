<?php
/*echo "<pre>";
var_dump($_POST);

echo "<hr>";
echo $_POST['nombre'];
echo "<br>";
echo $_POST['apellido'];
echo "<br>";
echo $_POST['dni'];
echo "<br>";
echo $_POST['telefono'];
echo "<br>";
echo $_POST['correo'];
echo "<br>";
echo $_POST['clave'];*/

$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$apellido = strip_tags(htmlspecialchars($_POST['apellido']));
$dni = strip_tags(htmlspecialchars($_POST['dni']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$correo = strip_tags(htmlspecialchars($_POST['correo']));
$clave = strip_tags(htmlspecialchars($_POST['clave']));

//GUARDAR EN DB

$datos_conexion = mysqli_connect("localhost", "root", "", "curso_prueba");

mysqli_query($datos_conexion, "INSERT INTO usuarios (nombre, apellido, dni, telefono, correo, clave) VALUES ('$nombre','$apellido','$dni', '$telefono','$correo', '$clave')");

header("Location: tpregistro_integrador.php?enviado=1&nombre=".$nombre."&apellido=".$apellido);

exit();


?>