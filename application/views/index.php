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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>"/>
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3GG1bWOb8u2eCEteiCY1yGnaKrqgW6R4&libraries=places"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/user_geolocation.js')?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous"/>
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
    </div>
    <div class="language-container col-xs-5 col-sm-4 col-md-4 row-flex align-items-center justify-content-end">
        <span class="row-flex align-items-end" >Idioma</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ESP</span>
        <span class="row-flex" style="font-size:36px;cursor:pointer;">ENG</span>
    </div>
</div>
<div class="principal-body">
    <div class="row">
        <!-- principal-body-empresa es visible solamente xs and sm -->
        <div class="principal-body-empresa col-xs-12 row-flex align-items-end hidden-md-up" style="padding:0px;">
            <div class="logo-container row-flex justify-content-center">
            </div>
            <div class="empresa-button row-flex justify-content-center align-items-center">
                <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/empresa')?>">La empresa</a>
            </div>
        </div>

        <div class="principal-body-granos row-flex justify-content-center align-items-end col-xs-12 col-sm-12 col-md-4 ">
            <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/granos')?>">
                Granos
            </a>
        </div>

        <div class="principal-body-precocidos row-flex justify-content-center align-items-center col-xs-12 ol-sm-12 hidden-md-up">
            <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/precocidos')?>">		Precocidos
            </a>
        </div>

        <div class="principal-body-harinas row-flex justify-content-center align-items-end col-xs-12 col-sm-12 col-sm-push-4 col-md-4 col-md-push-4">
            <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/harinas')?>">Harinas</a>
        </div>


        <div class="principal-body-precocidos column-flex justify-content-end align-items-center col-sm-4 col-sm-pull-4 col-md-4 col-md-pull-4 hidden-sm-down" style="padding-left:0px; padding-right:0px">
            <a class="principal-body-precocidos-empresa btn-custom col-md-12 row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/empresa')?>">La empresa</a>
            <a class="btn-custom col-md-12 row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/precocidos')?>">Precocidos</a>
            <div class="logo-container">
            </div>
        </div>

    </div>
</div>
</body>
</html>