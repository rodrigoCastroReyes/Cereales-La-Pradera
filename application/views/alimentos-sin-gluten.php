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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/noticia_pradera.css')?>">
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
        <h1 class="text-center">Alimentos para un menú sin gluten</h1>
        <h5 class="text-center">Febrero 4, 2017</h5>
        <div id="images-div" class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
            <img class="center-block img-responsive" src="<?php echo base_url('assets/images/noticias_pradera/alimentos-sin-gluten.jpg')?>" />
        </div>
        <div id="info" class="col-sm-offset-2 col-md-offset-2 col-sm-8 col-md-8">
            <p >
                Cuando una persona es diagnosticada con enfermedad celíaca suele estresarse al observar la cantidad de alimentos que el gastroenterólogo
                le indica no comer. Sin embargo, debe saber que hay muchos sustititutos para su dieta, libres de esta proteína, que puede consumir y
                combinar para elaborar deliciosas recetas.
            </p>
            <p>
                La clave está en elaborar una lista de estos productos y ser conscientes de que la preparación también cuenta al momento de evitar trazas
                de gluten. Es importante comenzar su dieta de la mano del nutricionista, pues no debe perder nutrientes indispensables en su nuevo hábito
                alimenticio, así como revisar las etiquetas de información de cada producto que adquiera.
            </p>
            <p>
                A continuación una breve guía de alimentos sin gluten:
            </p>
            <h5>En estado natural no poseen gluten</h5>
            <p>
                Carne<br>
                Pescado<br>
                Frutas<br>
                Verduras<br>
                Huevos<br>
                Legumbres<br>
                Leche<br>
                Papas<br>
            </p>
            <h5>Azúcares</h5>
            <p>
                Almíbares<br>
                Azúcar blanca y morena<br>
                Miel<br>
            </p>
            <h5>Bebidas</h5>
            <p>
                Cafés de todo tipo<br>
                Gaseosas<br>
                Infusiones de hierbas naturales<br>
                Zumos de frutas<br>
            </p>
            <h5>Cereales</h5>
            <p>
                Arroz<br>
                Maíz<br>
                Quinoa<br>
                Amaranto<br>
                Trigo Sarraceno<br>
            </p>
            <h5>Grasas</h5>
            <p>
                Aceites de todos los tipos<br>
                Grasas animales<br>
                Mantequilla tradicional<br>
                Margarinas sin fibra<br>
            </p>
            <h5>Otros</h5>
            <p>
                Aceitunas con y sin hueso<br>
                Encurtidos<br>
                Canguil (maíz, aceite y sal)<br>
                Cacao puro<br>
                Especias naturales<br>
            </p>
            <p>
                En el caso de embutidos, productos cárnicos o pescados congelados,
                solo se pueden consumir los que no han sido procesados con otros alimentos.
            </p>
            <p>
                <Strong>Fuente:</Strong> <a target="_blank" href="http://www.celiacos.org">www.celiacos.org</a>
            </p>
        </div>
        <div id="volver" class="col-xs-12 col-sm-11 col-md-11">
            <a href="<?php echo base_url('index.php/home/noticias')?>">Volver</a>
        </div>
    </div>

</div>
</body>
</html>