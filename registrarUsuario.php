<?php
if(isset($_POST['Enviar'])){
    if (strlen($_POST['primer-nombre'])>=1 &&
    strlen($_POST['segundo-nombre'])>=1&&
    strlen($_POST['primer-apellido'])>=1&&
    strlen($_POST['segundo-apellido'])>=1&&
    strlen($_POST['telefono'])>=1&&
    strlen($_POST['email'])>=1&&
    strlen($_POST['nacionalidad'])>=1&&
    strlen($_POST['identidad'])>=1&&
    strlen($_POST['ciudad'])>=1&&
    strlen($_POST['municipio'])>=1&&
    strlen($_POST['direccion'])>=1&&
    strlen($_POST['clave'])>=1)
    {
        $primerNombre=trim($_POST['primer-nombre']);
        $segundoNombre=trim($_POST['segundo-nombre']); 
        $primerApellido=trim($_POST['primer-apellido']); 
        $segundoApellido=trim($_POST['segundo-apellido']); 
        $telefono=trim($_POST['telefono']); 
        $email=trim($_POST['email']); 
        $nacionalidad=trim($_POST['nacionalidad']); 
        $identidad=trim($_POST['identidad']); 
        $ciudad=trim($_POST['ciudad']); 
        $municipio=trim($_POST['municipio']); 
        $direccion=trim($_POST['direccion']); 
        $clave=trim($_POST['clave']);

        include("conexion.php");
        $sql = "INSERT INTO usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, telefono, email, nacionalidad, identidad, ciudad, municipio, direccion, clave) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar la consulta
$stmt = $conex->prepare($sql);
$stmt->bind_param("ssssssssssss", $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $telefono, $email, $nacionalidad, $identidad, $ciudad, $municipio, $direccion, $clave);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar usuario: " . $conex->error;
}
        // Cerrar la conexiÃ³n
        $conex->close();
    } 
}
    ?>