<?php
    include("conexion.php");
    $con = conexion();

    $cedula = $_GET['id'];

    $sql = "DELETE FROM Estudiantes WHERE cedula = '$cedula'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("location: index.php");
    }
?>