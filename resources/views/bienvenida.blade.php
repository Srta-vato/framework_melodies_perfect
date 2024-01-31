<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bienvenida</title>
    <style>
        body {
    background: url(Imagenes/music-1283851_960_720.jpg);
    background-size: 100vw 100vh;
    background-repeat: no-repeat;
}

.capa {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
    top: 0;
    left: 0;
}


/*Estilos para el encabezado*/

.header {
    width: 100%;
    height: 100px;
    position: fixed;
    top: 0;
    left: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.container .btn-menu,
.logo {
    float: left;
    line-height: 100px;
}

.container .btn-menu label {
    color: #fff;
    font-size: 25px;
    cursor: pointer;
}

.logo h1 {
    color: #fff;
    font-weight: 400;
    font-size: 22px;
    margin-left: 10px;
}

.container .menu {
    float: right;
    line-height: 100px;
}

.container .menu a {
    display: inline-block;
    padding: 15px;
    line-height: normal;
    text-decoration: none;
    color: #fff;
    transition: all 0.3s ease;
    border-bottom: 2px solid transparent;
    font-size: 15px;
    margin-right: 5px;
}

.container .menu a:hover {
    border-bottom: 2px solid #fffefe;
    padding-bottom: 5px;
}


/*Fin de Estilos para el encabezado*/


/*Menù lateral*/

#btn-menu {
    display: none;
}

.container-menu {
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    transition: all 500ms ease;
    opacity: 0;
    visibility: hidden;
}

#btn-menu:checked~.container-menu {
    opacity: 1;
    visibility: visible;
}

.cont-menu {
    width: 100%;
    max-width: 250px;
    background: #1c1c1c;
    height: 100vh;
    position: relative;
    transition: all 500ms ease;
    transform: translateX(-100%);
}

#btn-menu:checked~.container-menu .cont-menu {
    transform: translateX(0%);
}

.cont-menu nav {
    transform: translateY(15%);
}

.cont-menu nav a {
    display: block;
    text-decoration: none;
    padding: 20px;
    color: #c7c7c7;
    border-left: 5px solid transparent;
    transition: all 400ms ease;
}

.cont-menu nav a:hover {
    border-left: 5px solid #ffffff;
    background: #1f1f1f;
}

.cont-menu label {
    position: absolute;
    right: 5px;
    top: 10px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
}

section {
    margin-top: 700px;
    margin-left: 50px;
    margin-right: 50px;
}



h1 {
    font-family: 'Dancing Script', cursive;
    font-size: 40px;
    margin-bottom: 30px;
}

h3,
p {
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 30px;
}

button {
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 50px;
    color: #333;
    background: #fff;
    margin-bottom: 50px;
    box-shadow: 0 3px 20px 0 #0000003b;
}

button:hover {
    cursor: pointer;
}

div.noticia {
    width: 100%;
    margin: 60px auto;
    background-color: rgb(124, 124, 124);
    color: #fff;
}

div.noticia img.izquierda {
    float: left;
    margin-right: 15px;
}

div.noticia img.derecha {
    float: right;
    margin-left: 15px;
}

div.reset {
    clear: both;
}


//*Menu herramientas*//

.menu {
    position: relative;
    background: #cd3e3d;
    width: 3em;
    height: 3em;
    border-radius: 5em;
    margin-top: 5em;
    margin-bottom: 5em;
    cursor: pointer;
    border: 1em solid #fdaead;
  }
  .menu:after {
    content: "";
    position: absolute;
    top: 738px;
    left: 90px;
    width: 1em;
    height: 0.2em;
    border-top: 0.6em double #fff;
    border-bottom: 0.2em solid #fff;
  }
  .menu ul {
    list-style: none;
    padding: 0;
  }
  .menu li {
    width: 5em;
    height: 1.4em;
    padding: 0.2em;
    margin-top: 740px;
    text-align: center;
    border-top-right-radius: 0.5em;
    border-bottom-right-radius: 0.5em;
    transition: all 1s;
    background: #fdaead;
    opacity: 0;
    z-index: -1;
  }
  .menu:hover li {
    opacity: 1;
  }
  /**
   * Add a pseudo element to cover the space
   * between the links. This is so the menu
   * does not lose :hover focus and disappear
   */
  .menu:hover ul::before {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    display: block;
    left: 50%;
    top: -5.0em;
    /**
     * The pseudo-element is a semi-circle
     * created with CSS. Top, bottom, and right
     * borders are 6.5em (left being 0), and then
     * a border-radius is added to the two corners
     * on the right.
     */
    border-width: 6.5em;
    border-radius: 0 7.5em 7.5em 0;
    border-left: 0;
    border-style: solid;
    /**
     * Have to have a border color for the border
     * to be hoverable. I'm using a very light one
     * so that it looks invisible.
     */
    border-color: rgba(0,0,0,0.01);
    /**
     * Put the psuedo-element behind the links
     * (So they can be clicked on)
     */
    z-index: -1;
    /**
     * Make the cursor default so it looks like
     * nothing is there
     */
    cursor: default;
  }
  .menu a {
    color: white;
    text-decoration: none;
    /**
     * This is to vertically center the text on the
     * little tab-like things that the text is on.
     */
    line-height: 1.5em;
  }
  .menu a {
    color: white;
    text-decoration: none;
  }
  .menu ul {
    transform: rotate(180deg) translateY(-2em);
    transition: 1s all;
  }
  .menu:hover ul {
    transform: rotate(0deg) translateY(-1em);
  }
  .menu li:hover {
    background: #cd3e3d;
    z-index: 10;
  }
  
  .menu li:nth-of-type(1) {
    transform: rotate(-90deg);
    position: absolute;
    left: 50px;
    top: -4.2em;
  }
  .menu li:nth-of-type(2) {
    transform: rotate(-45deg);
    position: absolute;
    left: 100px;
    top: -3em;
  }
  .menu li:nth-of-type(3) {
    position: absolute;
    left: 120px;
    top: 0.3em;
  }
  .menu li:nth-of-type(4) {
    transform: rotate(45deg);
    position: absolute;
    left: 100px;
    top: 3.7em;
  }
  .menu li:nth-of-type(5) {
    transform: rotate(90deg);
    position: absolute;
    left: 100px;
    top: 5em;
  }
  .hint {
    text-align: center;
  }



  /*Footer*/
  
  
footer {
    margin-top: 200px;
}

.site-footer {
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
}

.site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
}

.site-footer hr.small {
    margin: 20px 0
}

.site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
}

.site-footer a {
    color: #737373;
}

.site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
}

.footer-links {
    padding-left: 0;
    list-style: none
}

.footer-links li {
    display: block
}

.footer-links a {
    color: #737373
}

.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
}

.footer-links.inline li {
    display: inline-block
}

.site-footer .social-icons {
    text-align: right
}

.site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d
}

.copyright-text {
    margin: 0
}

@media (max-width:991px) {
    .site-footer [class^=col-] {
        margin-bottom: 30px
    }
}

@media (max-width:767px) {
    .site-footer {
        padding-bottom: 0
    }
    .site-footer .copyright-text,
    .site-footer .social-icons {
        text-align: center
    }
}

.social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.social-icons li {
    display: inline-block;
    margin-bottom: 4px
}

.social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px
}

.social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
}

.social-icons a:active,
.social-icons a:focus,
.social-icons a:hover {
    color: #fff;
    background-color: #29aafe
}

.social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px
}

.social-icons a.facebook:hover {
    background-color: #3b5998
}

.social-icons a.twitter:hover {
    background-color: #00aced
}

.social-icons a.linkedin:hover {
    background-color: #e93939
}

.social-icons a.dribbble:hover {
    background-color: #ea4c89
}

@media (max-width:767px) {
    .social-icons li.title {
        display: block;
        margin-right: 0;
        font-weight: 600
    }
}
</style>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
            <div class="logo">
                <h1>Servicios</h1>
            </div>
            <nav class="menu">
                <a href="perfil.html">Perfil</a>
                <a href="#ancla 1">Nosotros</a>
                <a href="terminos.html">Terminos...</a>
                <a href="contacto.html">Contacto</a>
                <a href="asistente.html">Ayuda</a>
            </nav>
        </div>
    </header>
    <div class="capa"></div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="buscador.php"><img src="Imagenes/buscar (1).png" width="20" height="20" alt="" /> Buscar</a>
                <a href="Percucion.html"><img src="Imagenes/tambor.png" width="20" height="20" alt="" />Percusión</a>
                <a href="viento.html"><img src="Imagenes/flauta.png" width="20" height="20" alt="" />Viento</a>
                <a href="cuerda.html"><img src="Imagenes/guitarra.png" width="20" height="20" alt="" />Cuerda</a>
                <a href="eletronicos.html"><img src="Imagenes/guitarra-electrica.png" width="20" height="20" alt="" />Eletricos</a>
                <a href="solicitud.html"><img src="Imagenes/notepad.png" width="20" height="20" alt="" />Solicitudes</a>
                <a href="pedidos.html"><img src="Imagenes/bolsa-de-la-compra.png" width="20" height="20" alt="" />Mis pedidos</a>
                <li><a href="?cerrar_sesion=true">Cerrar Sesión</a></li>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>

    <nav class="menu">
        <ul>
            <li><button id="btnEscuchar">Escuchar</button></li>
            <li><button id="btnDetener">Detener</button></li>
            <li><a href="mapa de navegacion.html">Mapa</a></li>
            <li><a href="chat voz.html">Hablar</a></li>
        </ul>
    </nav>
    <h1 class="hint">.</h1>
    <p class="hint">.</p>

    <section>
        <div class="noticia">
            <a name="ancla 1"><img class="izquierda" src="Imagenes/familia.jpg" width="500" height="500" alt="" /></a>
            <h1>Melodies Perfect - Nuestro origen</h1>
            <p>Todo comenzó en 1960, nuestro fundador en esa época, mi abuelo William Perez, se dedicaba a la fabricación de instrumentos de cuerda y algunos de viento con excelentes técnicas, las cuales fueron enseñadas a mi padre y tíos. Actualmente,
                quien dirige el negocio soy yo, Jose Antonio Perez, quien al igual que mi padre, tiene un gran amor por la música e instrumentos musicales.</p>
            <p>Es así como mantenemos viva a Melodies Perfect y cada año seguimos creciendo gracias a ustedes. Es por eso que se creó esta página, para darnos a conocer en todo Colombia y muy pronto en todo el mundo.</p>
            <div class="reset"></div>
        </div>

        <div class="noticia">
            <img class="derecha" src="Imagenes/trabajos.jpg" width="700" height="500" alt="" />
            <h1>Fabricaciones</h1>
            <p>Nuestra familia está capacitada para crear desde cero guitarras, violines, flautas y otros instrumentos más, al igual que arreglar y dar mantenimiento a otra gran gama de instrumentos. Es cierto que en nuestra tienda vendemos instrumentos de
                otras marcas (muy buenas por cierto), ya que la fabricación de instrumentos lleva tiempo. Preferimos venderlos como instrumentos personalizados. Aunque este servicio aún no está activo en este sitio, esperamos ponerlo a producir en todo
                el país muy pronto.</p>
            <div class="reset"></div>
        </div>

        <div class="noticia">
            <a name="ancla 1"><img class="izquierda" src="Imagenes/alquiler.jpg" width="500" height="500" alt="" /></a>
            <h1>Melodies Perfect - Servicios a Ofrecer</h1>
            <p> Los servicios que ofreceremos por aquí son bastante simples pero muy útiles. Compra de instrumentos musicales: Sabemos lo importante que es para un músico amante de las melodías perfectas producidas en un instrumento de buena calidad, el
                encontrar tu instrumento perfecto. Es por eso que Melodies Perfect ofrece este servicio junto con un gran catálogo para que puedas escoger a tu gusto desde marca hasta color. Alquiler de Productos: sabemos lo costoso que pueden llegar a ser
                algunos productos y lo triste que es simplemente quedarte con las ganas o no poder realizar un evento por no tenerlo. Melodies Perfect pensó en eso, es por eso que en este servicio te prestamos instrumentos de alta gama a un precio accesible,
                solo necesitas ser apto para el servicio y listo. Esperamos seguir creciendo con tu ayuda, muchas gracias de antemano.</p>
            <div class="reset"></div>
        </div>
    </section>

    <script>
        document.getElementById('btnEscuchar').addEventListener('click', function () {
            var contenido = document.querySelector('section').innerText;
            leerContenido(contenido);
        });

        function leerContenido(contenido) {
            if ('speechSynthesis' in window) {
                var utterance = new SpeechSynthesisUtterance(contenido);
                window.speechSynthesis.speak(utterance);
            } else {
                alert('Lo siento, la funcionalidad de Text-to-Speech no es compatible en este navegador.');
            }
        }

        document.getElementById('btnDetener').addEventListener('click', function () {
            window.speechSynthesis.cancel();
        });

    </script>

</body>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Melodies Perfect</h6>
                <p class="text-justify">MelodiesPerfect.com <i>FOOTER </i> Te invitamos a sumergirte en nuestro showroom, donde podrás explorar una amplia gama de instrumentos, desde guitarras y pianos hasta instrumentos de viento y percusión. Nuestro personal experto estará encantado de guiarte a través de nuestras colecciones, respondiendo a todas tus preguntas y ayudándote a encontrar el instrumento perfecto que se adapte a tus necesidades y preferencias.</p>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by Melodies Perfect
                            <a href="#"> Melodies Perfect</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"><img src="Imagenes/facebook.png" width="40" height="40" alt="" /></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"><img src="Imagenes/gorjeo.png" width="40" height="40" alt="" /></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"><img src="Imagenes/instagram (1).png" width="40" height="40" alt="" /></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"><img src="Imagenes/pinterest.png" width="40" height="40" alt="" /></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
</footer>
</html>
