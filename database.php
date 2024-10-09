<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a base
    $conexion = new mysqli(
    hostname: "localhost", 
    username: "root2024", 
    password: "Q1290qazpñ3781pq", 
    database: "skytower");

    $conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $database, );


    // Comprobar si estoy conectada a la base
    if ($conn->connect_error) {
      die("error: " . $conn->connect_error);
    }
    echo "Conexión exitosa";

    // Recibir datos del formulario
    $nombre=$_POST['name'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    $domicilio=$_POST['domicilio'];
    $teléfono=$_POST['telefono'];
    $comentario=$_POST['comentario'];

  // insertar los datos
    $sql = "INSERT INTO directorio (nombre, email, edad, domicilio, teléfono, comentario, ) 
            VALUES ('$nombre', '$email', '$edad', '$domicilio', '$teléfono','$comentario', )";

    // Ejecutar la consulta
   if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Formulario enviado correctamente.'); window.location.href = '../Contacto.html';</script>";
    exit();
} 

    // Cerrar la conexión
    $conexion->close();
}