<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $conn = new mysqli('localhost', 'root', '', 'cursosql');

    if ($conn->connect_error) {
        die("Connection to the database failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>