<?php
include("conexion.php");
$con=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$capacitacion=$_POST['capacitacion'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO capacitacion  (nombre, apellido, correo, capacitacion, fecha) VALUES('$nombre','$apellido','$correo','$capacitacion','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>