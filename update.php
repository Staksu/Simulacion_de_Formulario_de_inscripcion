<?php
    include("conexion.php");
    $con = conexion();

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "UPDATE Estudiantes SET nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono', email = '$email' WHERE cedula = '$cedula'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("location: index.php");
    }
?>