<?php
if(isset($_POST['Enviar'])){
    if (
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['clave']) >= 1
    ) {
        $email = trim($_POST['email']);
        $clave = $_POST['clave'];

        include("conexion.php");

        // Consulta a la base de datos
        $sql = "SELECT clave, email, id FROM usuarios WHERE email = ?";
        $stmt = $conex->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $ClaveUsuario = $row['clave'];
            $emailUsuario = $row['email'];
            $idUsuario= $row['id'];
          
            if ($clave==$ClaveUsuario) {
                    echo "<p>Bienvenido</p>";
                    header('Location: main.php');
                    exit();
                }
                else {
                    echo "<p>Contraseña incorrecta</p>";
                }
                
            } else {
                echo "<p>Usuario no encontrado</p>";
            }
        } else {
            echo "<p>no se enviaron los datos</p>";
        }

        $stmt->close();
        $conex->close();
    }

?>