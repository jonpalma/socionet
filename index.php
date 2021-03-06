<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="img-container">
                        <img src="img/index/banner/banner1.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="col-sm-6">
                            <div class="vertical-align">
                                <h1>
                                    Servicio Integral
                                </h1>
                                <p>
                                    Nosotros nos encargamos<br>
                                    de tu oficina.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/index/banner/banner2.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="col-sm-6">
                            <div class="vertical-align">
                                <h1>
                                    Servicio Integral
                                </h1>
                                <p>
                                    Nosotros nos encargamos<br>
                                    de tu oficina.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/index/banner/banner3.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="col-sm-6">
                            <div class="vertical-align">
                                <h1>
                                    Servicio Integral
                                </h1>
                                <p>
                                    Nosotros nos encargamos<br>
                                    de tu oficina.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container spacing">
            <div class="col-sm-9">
                <h1>
                    ¿Quienes somos?
                </h1>
                <p>
                    Somos una empresa que rentas espacios de oficinas privadas y
                    coworking para tu proyecto emprendedor, empresa ya establecida,
                    startup o lo que sea que estés implementando en este momento
                    de tu vida para salir de tu zona de confort y ser alguien
                    exitoso. Tenemos espacios a tu medida, desde una a más de 3
                    personas, visítanos y conócenos.
                </p>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicios parallax-container" id="servicios">
        <div class="parallax">
            <img src="img/index/servicios/bg2.jpg" alt="Parallax">
        </div>
        <div class="container spacing">
            <div class="titulo">
                <h1>
                    Servicios incluidos
                </h1>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <ul type="disc">
                    <li>recepción.</li>
                    <li>coworking.</li>
                    <li>sala de juntas.</li>
                    <li>cocineta.</li>
                    <li>estacionamiento.</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul type="disc">
                    <li>cámaras de seguridad.</li>
                    <li>acceso electrónico.</li>
                    <li>café.</li>
                    <li>internet.</li>
                    <li>servicios incluidos.</li>
                </ul>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* OFICINAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="oficinas-top" id="oficinas-top">
        <div class="container">
            <h1>
                Tamaños de oficinas
            </h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/icons/1people.png" alt="">
                        </div>
                        <h2>
                            1 Persona
                        </h2>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/icons/2people.png" alt="">
                        </div>
                        <h2>
                            2 Personas
                        </h2>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                        <div class="img-container">
                            <img src="img/icons/3people.png" alt="">
                        </div>
                        <h2>
                            3 Perosnas
                        </h2>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="oficinas-bottom" id="oficinas-bottom">
        <div class="container">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                    <div class="col-sm-8">
                        <div id="carousel-individual" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="img-container">
                                        <img class="img-bg" src="img/index/oficinas/1per.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-individual" data-slide-to="0" class="active"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h2>
                            1 Persona
                        </h2>
                        <p class="texto">
                            Espacio ideal para atender a tus clientes en un espacio más privado
                            y seguro que refleja profesionalismo.
                        </p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                    <div class="col-sm-8">
                        <div id="carousel-individual" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="img-container">
                                        <img class="img-bg" src="img/index/oficinas/2per.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-individual" data-slide-to="0" class="active"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h2>
                            2 Personas
                        </h2>
                        <p class="texto">
                            Espacio ideal para compartir cuentas y tener más organizada tu
                            área de trabajo.
                        </p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-3">
                    <div class="col-sm-8">
                        <div id="carousel-individual" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="img-container">
                                        <img class="img-bg" src="img/index/oficinas/3per.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-individual" data-slide-to="0" class="active"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h2>
                            3 Personas
                        </h2>
                        <p class="texto">
                            Espacio ideal para trabajar en pequeños equipos de trabajo y cuando
                            requieres mayor concentración y comunicación interna. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="oficinas-banner parallax-container" id="oficinas-banner">
        <div class="parallax">
            <img src="img/index/servicios/bg2.jpg" alt="Parallax">
        </div>
        <div class="container light-spacing">
            <div class="titulo">
                <h1>
                    Tenemos disponibilidad de espacios de más de 3 personas, pregunta por ellos.
                </h1>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container spacing">
            <h1>
                Contacto
            </h1>
            <div class="content">
                <div class="col-sm-4">
                    <div class="img-container vertical-align">
                        <img src="img/icons/pin.png" alt="">
                    </div>
                    <p class="vertical-align">
                        Perif. de la Juventud #7701-1
                        Chihuahua, Chih.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container vertical-align">
                        <img src="img/icons/phone.png" alt="">
                    </div>
                    <p class="vertical-align">
                        (614) 423.0218
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container vertical-align">
                        <img src="img/icons/mail.png" alt="">
                    </div>
                    <a class="vertical-align" href="mailto:roberta@socionet.mx,jesus@socionet.mx">
                        roberta@socionet.mx,<br>
                        jesus@socionet.mx
                    </a>
                </div>
            </div>
            <div class="form-container">
                <form action="mailer.php" method="POST" id="form">
                    <div class="col-sm-6 left-side">
                        <input type="text" class="text" name="name" id="name" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6 right-side">
                        <input type="email" class="text" name="email" id="email" placeholder="Correo">
                    </div>
                        <input type="number" class="text" name="phone" id="phone" placeholder="Teléfono">
                    <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder="Mensaje"></textarea>
                    <input type="hidden" name="bttnContacto">
                    <input type="submit" value="Enviar">
                    <div class="form-output" id="form-output"></div>
                </form>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="mapa" id="mapa">
        <button id="bttnMapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.585793488899!2d-106.13645848501086!3d28.672118482402134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea425fdeb47f47%3A0x6e01ce673c15bfdd!2sAv.+de+la+Juventud+7701%2C+Barrancas%2C+Juventud+Nte%2C+31155+%C5%9Ami%C5%82owice%2C+Chih.!5e0!3m2!1ses-419!2smx!4v1483037169941" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </button>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PIE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('pie.php'); ?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php'); ?>