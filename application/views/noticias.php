<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>La Pradera</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/images/logo.ico')?>' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/noticias.css')?>">
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
</head>
<body>
<div class="principal-bar">
    <div class="location-container col-xs-12 col-sm-4 col-sm-push-4 col-md-4 col-md-push-4 row-flex justify-content-start align-items-center" style="padding: 10px 0px;">
        <div class="location-input-container row-flex align-items-center">
            <span class="location-icon glyphicon glyphicon-map-marker"></span>
            <input id="address" class="location-input" type="text" placeholder="AQUI ESTOY">
            <span class="search-icon glyphicon glyphicon glyphicon glyphicon-ok"></span>
        </div>
    </div>
    <div class="social-container col-xs-7 col-sm-4 col-sm-pull-4 col-md-4 col-md-pull-4 row-flex align-items-center justify-content-start">
        <a class="a-custom row-flex align-items-center justify-content-center" target="_blank" href="https://www.facebook.com/Cereales-La-Pradera-1386331644719946/?fref=ts">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a class="a-custom row-flex align-items-center justify-content-center" target="_blank" href="https://twitter.com/LaPradera_ec">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a class="a-custom row-flex align-items-center justify-content-center" target="_blank" href="https://www.instagram.com/lapraderaec/">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="a-custom row-flex align-items-center justify-content-center" target="_blank" href="https://www.youtube.com/channel/UCZhZJyjV8yGydRa-gIX-z8w">
            <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a class="a-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/contacto')?>">
            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
        </a>
        <a class="a-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/index')?>">
            <i class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></i>
        </a>
    </div>
    <div class="language-container col-xs-5 col-sm-4 col-md-4 row-flex align-items-center justify-content-end">
        <span class="row-flex align-items-end" >Idioma</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ESP</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ENG</span>
    </div>
</div>
<div class="principal-body">
    <div class="principal-body-noticias">
        <div id="logo" class="hidden-xs">
            <img id="img-logo"  src="<?php echo base_url('assets/images/logoPortada.png')?>" />
        </div>
        <div id="images-div" class="hidden-xs col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
            <img class="img-responsive" src="<?php echo base_url('assets/images/noticias/noticias.jpg')?>" />
        </div>
        <div class="picture_row hidden-sm-up">
            <div class="principal-body-procesados col-xs-12">
                <div class="logo-container"></div>
            </div>
        </div>
        <div class="col-sm-offset-2 col-md-offset-2 col-sm-8 col-md-8 col-xs-12">
            <div class="col-xs-12 col-md-4 col-sm-4">
                <div class="thumbnail">
                    <a href="<?php echo base_url('index.php/home/noticia/celiaquia')?>">
                        <img class="img-responsive" src="<?php echo base_url('assets/images/noticias/celiaquia.jpg')?>" alt="noticias">
                    </a>
                    <div class="caption">
                        <h5>¿Qué es la celiaquía?</h5>
                        <p class=" noticia-info">La celiaquía o la enfermedad celíaca no es más que la intolerancia al gluten,
                            una proteína presente en varios cereales como el trigo, la cebada y el centeno.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-sm-4">
                <div class="thumbnail">
                    <a href="<?php echo base_url('index.php/home/noticia/alimentos-sin-gluten')?>">
                        <img class="img-responsive" src="<?php echo base_url('assets/images/noticias/popcorn.jpg')?>" alt="noticias">
                    </a>
                    <div class="caption">
                        <h5 >Alimentos para un menú sin gluten</h5>
                        <p class=" noticia-info">Cuando una persona es diagnotiscada con enfermedad celíaca suele estresarse al observar la cantidad de alimentos
                            que el gastroenterólogo le indica no comer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="volver" class="col-xs-12 col-sm-11 col-md-11">
            <a href="<?php echo base_url('index.php/home/empresa')?>">Volver</a>
        </div>
    </div>

</div>
</body>
</html>