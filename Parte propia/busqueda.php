<?php
$conn = mysqli_connect("localhost", "root", "", "empresas");

if (!$conn) {
  die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];

// Ejecutar la consulta SELECT para buscar en la base de datos
$sql = "SELECT * FROM empresas WHERE nombre LIKE '%$nombre%'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Resultado encontrado: " . $fila['nombre'] . "<br>";
  }
} else {
  echo "No se encontraron resultados para el término de búsqueda: " . $nombre;
}

mysqli_close($conn);
?>