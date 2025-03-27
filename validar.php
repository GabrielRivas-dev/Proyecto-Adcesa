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
                $sql = "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, telefono, email, 
                nacionalidad, identidad, ciudad, municipio, direccion, clave FROM usuarios WHERE id=?";
                $stmt = $conex->prepare($sql);
                $stmt->bind_param("s", $idUsuario);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($row = $result->fetch_assoc()) {
                    $NombreUsuario =$row['primer_nombre'];
                    $ApellidoUsuario =$row['segundo_nombre'];
                    $CedulaUsuario =$row['primer_apellido'];
                    $FechaUsuario =$row['segundo_apellido'];
                    $GeneroUsuario =$row['telefono'];
                    $EmailUsuario =$row['email'];
                    $ClaveUsuario =$row['nacionalidad'];
                    $imagenUsuario =$row['identidad'];
                    $GeneroUsuario =$row['Genero'];
                    $EmailUsuario =$row['ciudad'];
                    $ClaveUsuario =$row['municipio'];
                    $imagenUsuario =$row['direccion'];
                    
                
                    echo "<p class='exitoso'>Bienvenido $NombreUsuario</p>";
                    session_start();
                    $_SESSION['logueado']=true;
                    $_SESSION['id'] = $idUsuario;
                    $_SESSION['Nombre'] = $NombreUsuario;
                    $_SESSION['Apellido'] = $ApellidoUsuario;
                    $_SESSION['Cedula'] = $CedulaUsuario;
                    $_SESSION['Fecha'] = $FechaUsuario;
                    $_SESSION['Genero'] = $GeneroUsuario;
                    $_SESSION['Email'] = $EmailUsuario;
                    $_SESSION['Clave'] = $ClaveUsuario;
                    $_SESSION['imagen'] = $imagenUsuario;
                    $_SESSION['Genero'] = $GeneroUsuario;
                    $_SESSION['Email'] = $EmailUsuario;
                    $_SESSION['Clave'] = $ClaveUsuario;
                    $_SESSION['imagen'] = $imagenUsuario;
                    header('Location: PaginaPrincipal.php');
                exit();
                }
                
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