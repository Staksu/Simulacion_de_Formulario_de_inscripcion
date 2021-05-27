<?php
    include("conexion.php");
    $con =conexion();

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Estudiantes VALUES('$cedula', '$nombre', '$apellidos', '$telefono', '$email')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("location: index.php");
    }else{
        
    }
?>