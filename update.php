<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$capacitacion=$_POST['capacitacion'];
$fecha=$_POST['fecha'];

$sql="UPDATE capacitacion SET  nombre='$nombre',apellido='$apellido',correo='$correo',capacitacion='$capacitacion',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>