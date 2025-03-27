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
                    $Pnombre =$row['primer_nombre'];
                    $Snombre =$row['segundo_nombre'];
                    $Papellido =$row['primer_apellido'];
                    $Sapellido =$row['segundo_apellido'];
                    $telefono =$row['telefono'];
                    $email =$row['email'];
                    $nacionalidad =$row['nacionalidad'];
                    $identidad =$row['identidad'];
                    $ciudad =$row['ciudad'];
                    $municipio =$row['municipio'];
                    $direccion =$row['direccion'];
                    $clave =$row['clave'];
                    
                
                    echo "<p class='exitoso'>Bienvenido $Pnombre</p>";
                    session_start();
                    $_SESSION['logueado']=true;
                    $_SESSION['id'] = $idUsuario;
                    $_SESSION['primer_nombre'] = $Pnombre;
                    $_SESSION['segundo_nombre'] = $Snombre;
                    $_SESSION['primer_apellido'] = $Papellido;
                    $_SESSION['segundo_apellido'] = $Sapellido;
                    $_SESSION['telefono'] = $telefono;
                    $_SESSION['email'] = $email;
                    $_SESSION['nacionalidad'] = $nacionalidad;
                    $_SESSION['identidad'] = $identidad;
                    $_SESSION['ciudad'] = $ciudad;
                    $_SESSION['municipio'] = $municipio;
                    $_SESSION['direccion'] = $direccion;
                    $_SESSION['clave'] = $clave;
                    header('Location: main.php');
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