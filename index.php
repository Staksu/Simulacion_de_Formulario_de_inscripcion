<?php
    include("conexion.php");
    $con = conexion();

    $sql = "SELECT *FROM Estudiantes";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de datos</title>
    <link rel="stylesheet" href="Diseños/Style.css">
</head>
<body>
    <main>
        <section class="Image-container">
            <img src="#" alt="">
        </section>

        <section class="container">
            <div class="form-container">
                <form action="insertar.php" method="POST">
                    <fieldset>
                        <h1>Ingresa los datos</h1>
                        <input type="text" class="text-form" name="cedula" placeholder="Ingresa tu cedula">
                        <br>
                        <input type="text" class="text-form" name="nombre" placeholder="Ingresa tu nombre">
                        <br>
                        <input type="text" class="text-form" name="apellidos" placeholder="Ingresa tus apellidos">
                        <br>
                        <input type="text" class="text-form" name="telefono" placeholder="Ingrese su teléfono">
                        <br>
                        <input type="text" class="text-form" name="email" placeholder="Ingrese su email">
                        <br>

                        <input type="submit" class="button" value="Enviar">
                    </fieldset>
                </form>
            </div>

            <div class="table-container">
                <h1>Datos registrados en la Base de Datos</h1>
                <table class="table">
                    <thead class="container-head">
                        <tr>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>telefono</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="container-body">
                        <?php
                            while($row = mysqli_fetch_array($query)){
                        ?>

                        <tr>
                            <th>
                                <?php echo $row['cedula']?>
                                <hr>
                            </th>

                            <th>
                                <?php echo $row['nombre']?>
                                <hr>
                            </th>

                            <th>
                                <?php echo $row['apellidos']?>
                                <hr>
                            </th>

                            <th>
                                <?php echo $row['telefono']?>
                                <hr>
                            </th>

                            <th>
                                <?php echo $row['email']?>
                                <hr>
                            </th>

                            <th>
                                <a href="actualizar.php?id=<?php echo $row['cedula'] ?>" class="btn-edit">
                                    Editar
                                </a>
                                <hr>
                            </th>

                            <th>
                                <a href="delete.php?id=<?php echo $row['cedula'] ?>" class="btn-delete">
                                    Eliminar
                                </a>
                                <hr>
                            </th>
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <ul>
            <li>
                <a href="contactos.html">Contactos</a>
            </li>

            <li>
                <a href="nosotros.html">Nosotros</a>
            </li>

            <li>
                <a href="terminos.html">Terminos</a>
            </li>
        </ul>
    </footer>
</body>
</html>