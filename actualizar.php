<?php
    include("conexion.php");
    $con = conexion();

    $id = $_GET['id'];

    $sql = "SELECT *FROM Estudiantes WHERE cedula = '$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos</title>
    <link rel="stylesheet" href="Diseños/Style.css">
</head>
<body>
    <main>
        <section class="container-actualizar">
            <form action="update.php" method="POST">
                <input type="hidden" name="cedula" value="<?php echo $row['cedula'] ?>">

                <input type="text" class="text-form" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                <input type="text" class="text-form" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>">
                <input type="text" class="text-form" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono'] ?>">
                <input type="text" class="text-form" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
                <br><br>

                <input type="submit" class="button" value="Actualizar">
            </form>
        </section>
    </main>
</body>
</html>