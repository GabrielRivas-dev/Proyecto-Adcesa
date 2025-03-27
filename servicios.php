<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="servicios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cherry+Cream+Soda&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header  class="header">
        <img class="logoHeader" src="./Imagenes/logo.png" alt="logo">
        <h1 class="significadoicono">Servicios</h1>
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="servicios.php"><i class="fa-solid fa-store" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-money-check-dollar" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-comment" style="color: #ffffff;"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-bell" style= "color: #ffffff;"></i></a></li>
            </ul>
        </nav>
    </header>

    <div class="subtitulos">
        <a onclick="desplegarAvisos()"><h2>Avisos</h2></a>
    </div>
    
    <div class="avisos" id="avisos">
        <div class="imagen-avisos"><img src="./Imagenes/serviciouno.jpg" alt="serviciouno"><h2>Tipo bastidor en lona impresa y letras en acrilicio con iluminación</h2></div>
        <div class="imagen-avisos"><img src="./Imagenes/serviciodos.jpg" alt="seviciodos"><h2>Lamina galvanizada y letras corpóreas en acrilico e iluminación</h2></div>
        <div class="imagen-avisos"><img src="./Imagenes/serviciotres.jpg" alt="serviciotres"><h2>Tipo bastidor con impresión en lona</h2></div>
        <div class="imagen-avisos"><img src="./Imagenes/serviciocuatro.jpg" alt="serviciocuatro"><h2>Caja de luz con impresión</h2></div>
        <div class="imagen-avisos"><img src="./Imagenes/serviciocinco.jpg" alt="serviciocinco"><h2>Tipo bastidor en lona impresa</h2></div>
    </div>
   
    <div class="subtitulos">
        <a onclick="desplegarBanderines()"><h2>Banderines</h2></a>
    </div>
    
    <div class="banderines" id="banderines">
        <div class="imagen-servicios"><img src="./Imagenes/banderinespublicitarios.jpg" alt="banderinespublicitarios"><h1></h1></div>
    </div>

    <div class="subtitulos">
        <a onclick="desplegarCaja()"><h2>Caja</h2></a>
    </div>
    
    <div class="caja" id="caja">
        <div class="imagen-servicios"><img src="./Imagenes/cajaacrilica.jpg" alt="cajaacrilica"><h1></h1></div>
    </div>
    
    <div class="subtitulos">
        <a onclick="desplegarDisplay()"><h2>Display</h2></a>
    </div>
    
    <div class="display" id="display">
        <div class="imagen-servicios"><img src="./Imagenes/display.jpg" alt="display"><h1></h1></div>
    </div>

    <div class="subtitulos">
        <a onclick="desplegarLetrero()"><h2>Letrero</h2></a>
    </div>
    
    <div class="letrero" id="letrero">
        <div class="imagen-servicios"><img src="./Imagenes/letreroluminoso.jpg" alt="letreroluminoso"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/letreroneonluminoso.jpg" alt="letreroneonluminoso"><h1></h1></div>
    </div>

    <div class="subtitulos">
        <a onclick="desplegarLogo()"><h2>Logo</h2></a>
    </div>
    
    <div class="logo" id="logo">
        <div class="imagen-servicios"><img src="./Imagenes/logocorporeoluminoso.jpg" alt="logocorporeoluminoso"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/serviciodoce.jpg" alt="serviciodoce"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/servicioquince.jpg" alt="servicioquince"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/serviciodiecisiete.jpg" alt="serviciodiecisiete"><h1></h1></div>
    </div>

    
    <div class="subtitulos">
        <a onclick="desplegarPorta()"><h2>Porta Accesorios</h2></a>
    </div>
    
    <div class="porta-accesorios" id="porta-accesorios">
        <div class="imagen-servicios"><img src="./Imagenes/servicionueve.jpg" alt="servicionueve"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/serviciodiez.jpg" alt="serviciodiez"><h1></h1></div>
    </div>

    <div class="subtitulos">
        <a onclick="desplegarRecuerdos()"><h2>Recuerdos</h2></a>
    </div>
    
    <div class="recuerdos" id="recuerdos">
        <div class="imagen-servicios"><img src="./Imagenes/serviciosiete.jpg" alt="serviciosiete"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/recuerdos.jpg" alt="recuerdos"><h1></h1></div>
    </div>
    
    <div class="subtitulos">
        <a onclick="desplegarStand()"><h2>Stand</h2></a>
    </div>
    
    <div class="stand" id="stand">
        <div class="imagen-servicios"><img src="./Imagenes/serviciodieciseis.jpg" alt="servicidiecioseis"><h1></h1></div>
        <div class="imagen-servicios"><img src="./Imagenes/serviciotrece.jpg" alt="serviciotrece"><h1></h1></div>
    </div>
   
    <footer>
    <div class="footer"><h3>Dirección</h3><p>Av. Páez entre calle Mérida y Apure, Casa Nro. 13-47, Centro Barinas, Zonal Postal 5201 - Venezuela</p></div>
    <div class="footer"><h3>Contacto</h3><p>(+58) 424-5104676</p></div>
    <div class="footer"><h3>Instagram</h3><p><a href="https://www.instagram.com/adcesapublicidad?igsh=cGh3b3dqZ3RlZWZq">adcesapublicidad<i class="fa-brands fa-instagram" style="color:rgb(10, 3, 110);"></i></a></p></div>
    </footer>

    <script src="servicios.js"></script>
</body>
</html>