<?php
$con=mysqli_connect('localhost','root','','formulario_1') or die('Error en la conexion servidor');
$sql="INSERT INTO registro VALUES(null,'".$_POST["nombre"]."','".$_POST["edad"]."','".$_POST["email"]."','".$_POST["direccion"]."')";
$resultado=mysqli_query($con,$sql) or die ('Error en el query database');
mysqli_close($con);

echo 'el nombre es: '.$_POST["nombre"];
echo 'la edad es : '.$_POST["edad"];
echo 'el correo es : '.$_POST["email"];
echo 'la direccion es : '.$_POST["direccion"];
?>
    