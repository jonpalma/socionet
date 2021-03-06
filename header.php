<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Somos una empresa que rentas espacios de oficinas privadas y coworking para tu proyecto emprendedor, empresa ya establecida, startup o lo que sea que estés implementando en este momento de tu vida para salir de tu zona de confort y ser alguien exitoso.">
        <meta name="keywords" content="oficina, coworking, espacios, renta, proyecto, empresa, privada, proyecto, emprendedor, startup">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="img/favicon.ico"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Socionet</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo">
                    <img class="vertical-align" src="img/icons/logo-nav.png" alt="logo">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-padd active">Inicio</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">Quienes somos</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#oficinas-top" class="smoothScroll vertical-align nav-padd">Tamaños de oficinas</a></li>
                        <span></span>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contacto" class="smoothScroll vertical-align nav-padd">Contacto</a></li>
                    </ul>
                </div>
                <p class="telefono hidden-xs">
                    Tel: (614) 423.0218
                </p>
            </div>
        </nav>