<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <title>Adcesa Publicidad</title>
</head>
<body>
    <div class="imagen">
        <img src="./Imagenes/logo.png" alt="logo">
    </div>
   <div class="registro" id="registro">
        <button onclick="iniciarSesion()" type="submit" value="Enviar">Ingresar</button>
        <p>¿Eres cliente nuevo? <a href="registro.php">Registrate aqui</a></p>
    </div>
    <div class="inicioSesion" id="inicioSesion">
    <form action="validar.php" method="POST">
        <div class="input">
            <label for="email">Correo del usuario</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="input">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="clave" id="clave" required>
        </div>
        <button type="submit"  name="Enviar" value="Enviar">Siguiente</button>
        </form>
    </div>
    <script src="inicio.js"></script>
</body>
</html>