<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>La Pradera</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/images/logo.ico')?>' />
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/calidad.css')?>">
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style type="text/css">
        /*carousel*/
        #myCarousel{
            height: 100%;
            margin: 0px;
            padding: 0px;
        }

        .carousel-inner{
            height: 100%;
        }

        .carousel-indicators{
            left: 30%;
            margin-bottom: 5px;
            bottom: 0px;
            padding: 20px;
        }

        .carousel-indicators li{
            background-color: white;
            border: none;
            font-size: 40px;
            width: 15px;
            height: 15px;
        }

        .carousel-indicators .active {
            width: 15px;
            height: 15px;
            background-color: #e70025;
        }
    </style>
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
<div id="principal-calidad" class="principal-body hidden-xs">
    <div class="logo-container"></div>
    <div class="row" style="margin:0">
        <div class="principal-body-calidad col-sm-4 col-md-4 col-lg-4">
            <h1 class="calidad-container-title">Calidad</h1>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
        </div>
        <div class="principal-body-volver col-sm-4 col-md-4 col-lg-4">
            <a href="<?php echo base_url('index.php/home/empresa')?>">Volver</a>
        </div>
    </div>
    <div class="row principal-body-slider row-flex">
        <div id="myCarousel" class="carousel slide" data-interval="10000" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="hidden-xs" src="<?php echo base_url('assets/images/calidad/foto1.jpg')?>" alt="slide">
                </div>
                <div class="item">
                    <img class="hidden-xs" src="<?php echo base_url('assets/images/calidad/foto3.jpg')?>" alt="slide">
                </div>
                <div class="item">
                    <img class="hidden-xs" src="<?php echo base_url('assets/images/calidad/foto4.jpg')?>" alt="slide">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left glyphicon-triangle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right glyphicon-triangle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="principal-body hidden-md-up">
    <div class="picture_row ">
        <div class="logo-container"></div>
        <h1 class="calidad-container-title" style="width:100%;">Calidad</h1>
        <div class="row principal-body-slider row-flex">
            <div id="myCarousel2" class="carousel slide" data-interval="10000" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="hidden-sm-up" src="<?php echo base_url('assets/images/calidad/foto1-xs.jpg')?>" alt="slide">
                    </div>
                    <div class="item">
                        <img class="hidden-sm-up" src="<?php echo base_url('assets/images/calidad/foto3-xs.jpg')?>" alt="slide">
                    </div>
                    <div class="item">
                        <img class="hidden-sm-up" src="<?php echo base_url('assets/images/calidad/foto4-xs.jpg')?>" alt="slide">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left glyphicon-triangle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right glyphicon-triangle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="principal-body-volver col-xs-12">
        <a href="<?php echo base_url('index.php/home/empresa')?>">Volver</a>
    </div>
</div>
</body>
</html>