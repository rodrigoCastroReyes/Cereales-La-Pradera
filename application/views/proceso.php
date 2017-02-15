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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/proceso.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
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
    <div class="language-container col-xs-5 col-sm-6 col-md-4 row-flex align-items-center justify-content-end">
        <span class="row-flex align-items-end" >Idioma</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ESP</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ENG</span>
    </div>
</div>
<div class="principal-body ">
    <div class="grano">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_one">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_one.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_two hidden-sm-down">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_two.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_three hidden-sm-down">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_three.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_four hidden-sm-down">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_four.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_five hidden-sm-down">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_five.png')?>" width="100px" height="100px">
    </div>
    <div class="grano_six hidden-sm-down">
        <img src="<?php echo base_url('assets/images/proceso/GranoSolo_six.png')?>" width="100px" height="100px">
    </div>
    <div class="step-one column-flex justify-content-start align-items-center col-xs-12 col-md-12">
        <div style="height:50%" class="col-xs-12 row-flex justify-content-center align-items-start">
            <div class="step-one-title col-xs-12 col-md-12">
            </div>
            <div class="step-one-icon">

            </div>
        </div>
        <div style="height:50%" class="col-xs-12 row-flex justify-content-center align-items-end">
            <div class="step-one-legend col-xs-10 col-md-12">
            </div>
        </div>
        <div class="step-one-campesino">

        </div>
        <a class="step-one-productos hidden-sm-down" href="<?php echo base_url('index.php/home/precocidos')?>"></a>
    </div>
    <div class="step-two row-flex justify-content-center align-items-center col-md-12">
        <div class="step-two-background col-md-4 hidden-sm-down">

        </div>
        <div class="step-two-background hidden-sm-up">

        </div>
        <div class="step-two-legend col-xs-12 col-md-4 col-md-pull-4">

        </div>
        <div class="step-two-machine col-xs-12 col-md-4 col-md-pull-4">

        </div>
    </div>
    <div class="step-three align-items-center col-md-12">
        <div class="step-three-legend col-xs-11 col-sm-3 col-sm-push-9 col-md-3 col-md-push-9">

        </div>
        <div class="step-three-machine col-xs-12 col-sm-6 col-md-6">

        </div>

    </div>
    <div class="step-four column-flex justify-content-start align-items-start col-md-12" style="padding:0px;">
        <div class="step-four-legend col-xs-12 col-md-4">

        </div>
        <div class="step-four-machine col-xs-12 col-md-4">

        </div>
        <div class="step-five-legend col-md-4 hidden-sm-down">

        </div>
        <div class="step-four-footer col-xs-12 col-sm-12 col-md-12">
            <a href="<?php echo base_url('index.php/home/precocidos')?>"> VER LISTA DE PRODUCTOS </a>
        </div>
    </div>
</body>
</html>