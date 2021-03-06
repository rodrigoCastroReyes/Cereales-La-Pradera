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
        <h1 class="text-center">¿Qué es la celiaquía?</h1>
        <h5 class="text-center">Febrero 4, 2017</h5>
        <div id="images-div" class=" col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
            <img class="center-block img-responsive" src="<?php echo base_url('assets/images/noticias_pradera/celiaquia.jpg')?>" />
        </div>
        <div id="info" class="col-xs-12 col-sm-offset-2 col-md-offset-2 col-sm-8 col-md-8">
            <p >
                La celiaquía o la enfermedad celíaca no es más que la intolerancia al gluten, una proteína presente en varios cereales como el trigo,
                la cebada y el centeno. Su ingesta produce una reacción inflamatoria  del intestino delgado, de base inmune, que destruye las vellosidades
                y dificulta la absorción de los alimentos, generando otras alteraciones en el cuerpo como la desnutrición.
            </p>
            <p>
                Aunque su tratamiento se centra en una dieta libre de gluten, favoreciendo de forma casi inmediata al celíaco, su sintomatología puede llegar
                a confundirse con otras patologías pasajeras o menores, que han hecho que esta afección no se diagnostique en una primera visita al gastroenterólogo,
                en la mayoría de los casos.
            </p>
            <p>
                Las probabilidades de no identificarla oportunamente aumentan cuando se trata de un paciente que nunca antes ha presentado síntomas. La celiaquía
                puede comenzar a cualquier edad, en la niñez o adultez; no tiene cura y la padecen sujetos predispuestos genéticamente.
            </p>
            <p>
                Según la Federación de Asociaciones de Celíacos de España existen enfermedades que suelen asociarse a una futura aparición de la celiaquía. Entre ellas
                están: la diabetes mellitus tipo I, la enfermedad hepática, de tiroides, la dermatitis herpetiforme y la intolerancia a la lactosa.
            </p>
            <h5>Síntomas del celíaco</h5>
            <p>
                La sintomatología varía entre los pacientes, mientras alguien puede tener estreñimiento, otro puede tener diarrea. Entre las alteraciones a nivel de sistema
                digestivo los celíacos pueden presentar dolor abdominal, distensión, gases, disminución del apetito, vómitos o hinchazón abdominal.
            </p>
            <p>
                Otros síntomas relacionados son pérdida de peso, anemia, fatiga, dolor óseo, cansancio, depresión, ansiedad, pérdida de cabello, hormigueo en manos o pies y
                cambios en el periodo menstrual en las mujeres.
            </p>
            <h5>Exámenes de diagnóstico</h5>
            <p>
                Para identificar la presencia de la enfermedad celíaca se debe realizar un examen de sangre para determinar la respuesta de ciertos anticuerpos. Posteriormente,
                se efectuará una biopsia intestinal con el objetivo de evaluar el daño del tejido en el intestino delgado.
            </p>
        </div>
        <div id="volver" class="col-xs-12 col-sm-11 col-md-11">
            <a href="<?php echo base_url('index.php/home/noticias')?>">Volver</a>
        </div>
    </div>

</div>
</body>
</html>