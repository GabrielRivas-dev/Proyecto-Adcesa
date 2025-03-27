<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Document</title>
</head>
<body>
    <div class="imagen">
        <img src="./Imagenes/logo.png" alt="logo">
    </div>
    <div class="formulario">
        <form action="registrarUsuario.php" method="POST">
            <div class="columna">
                <h1>Registro</h1>
           <div class="input">
            <label for="nombre">Primer nombre</label>
            <input type="text" name="primer-nombre" id="primer-nombre" required>
           </div>

           <div class="input">
            <label for="nombre">Segundo nombre</label>
            <input type="text" name="segundo-nombre" id="segundo-nombre" required>
        </div>
        <div class="input">
            <label for="apellido">Primer apellido</label>
            <input type="text" name="primer-apellido" id="primer-apellido" required>
        </div>
        <div class="input">
            <label for="apellido">Segundo apellido</label>
            <input type="text" name="segundo-apellido" id="segundo-apellido" required>
        </div>
        <div class="input">
            <label for="telefono">Teléfono</label>
            <input type="number" name="telefono" id="telefono" required>
        </div>
        <div class="input">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>
        
            </div>
            <div class="columna">
                <div class="inputRadio">
                    <label><input type="radio" name="nacionalidad" value="Venezolano"><p>Venezolano</p></label>
                    <label><input type="radio" name="nacionalidad" value="Extranjero"><p>Extranjero</p></label>
                    </div>
                        <div class="input">
                            <label for="Identidad">Identidad</label>
                            <input type="number" name="identidad" id="identidad" required>
                        </div>
              
                <div class="input">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" required>
                </div>
                <div class="input">
                    <label for="municipio">Municipio</label>
                    <input type="text" name="municipio" id="municipio" required>
                </div>
                <div class="input">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" required>
                </div>
                <div class="input">
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave" id="clave" required>
                </div>
                <button type="submit" class="button" name="Enviar" value="Enviar">Siguiente</button>
            </div>
        </form>
    </div>
</body>
</html>