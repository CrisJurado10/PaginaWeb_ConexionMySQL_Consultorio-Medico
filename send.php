<?php
include("conexion.php");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['Nombre']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['email']) >=1 &&
        strlen($_POST['message']) >=1 
    ) {

        $Nombre = trim($_POST['Nombre']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje)
        VALUES ('$Nombre', '$phone', '$email', '$message')";
        $resultado = mysqli_query($conex, $consulta);        

    }
}

?>