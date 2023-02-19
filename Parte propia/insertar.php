<?php

    include_once "conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $sitio_web = $_POST['sitio_web'];
    $sector = $_POST['sector'];

    $sql = "INSERT INTO empresas (id, nombre, direccion, telefono, sitio_web, sector) VALUES ('$id', '$nombre', '$direccion', '$telefono', '$sitio_web', '$sector')";
    if (mysqli_query($conn, $sql)) {
        echo "Registro creado correctamente";
    } else {
        echo "Error al crear registro: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
