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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contact.css')?>"/>
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery.scrollUp.min.js')?>" ></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3GG1bWOb8u2eCEteiCY1yGnaKrqgW6R4&libraries=places"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
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
<div class="hidden-sm-down logo-container"></div>
<div id="contact-form" class="col-xs-12 col-sm-12 col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-sm-5 col-md-5 col-lg-5">
    <div class="hidden-md-up col-xs-12 col-sm-12 logo-container" ></div>
    <div id="contact-title"><h1>Contáctanos</h1></div>
    <form id="contact-form">
        <div class="hidden-sm-down form-group row-flex align-items-center">
            <label for="sender-name" class="name control-label label-sender col-md-3 col-lg-3">Nombre</label>
            <div class="col-sm-9 col-md-9 col-lg-9"><input type="text" class="form-control"></div>
        </div>
        <div class="hidden-sm-down form-group row-flex align-items-center">
            <label for="sender-name" class="name control-label label-sender col-md-3 col-lg-3">Teléfono</label>
            <div class="col-sm-9 col-md-9 col-lg-9"><input type="tel" class="form-control"></div>
        </div>
        <div class="hidden-sm-down form-group row-flex align-items-center">
            <label for="sender-name" class="name control-label label-sender col-sm-3 col-md-3 col-lg-3">Email</label>
            <div class="col-sm-9 col-md-9 col-lg-9"><input type="email" class="form-control"></div>
        </div>
        <div class="hidden-sm-down form-group row-flex align-items-center">
            <label for="sender-name" class="name control-label label-sender col-sm-3 col-md-3 col-lg-3">Compañía</label>
            <div class="col-sm-9 col-md-9 col-lg-9"><input type="text" class="form-control"></div>
        </div>
        <div class="hidden-sm-down form-group row-flex align-items-cente">
            <label for="message-text" class="control-label label-message col-sm-3 col-md-3 col-lg-3">Mensaje</label>
            <div class="col-sm-9 col-md-9 col-lg-9"><textarea id="message" class="form-control"></textarea></div>
        </div>
        <div class="hidden-sm-down contact-buttons">
            <button id="btn_send_message" type="button" class="btn btn-primary glyphicon glyphicon glyphicon-ok"></button>
        </div>
    </form>
</div>
<div class="col-xs-12 col-sm-12 col-md-offset-1 col-lg-offset-1 col-md-5 col-lg-5">
    <form id="contact-form">
        <label for="sender-name" class="hidden-md-up name control-label label-sender col-xs-12 col-sm-12">Nombre</label>
        <div class="hidden-md-up col-xs-12 col-sm-12"><input type="text" class="form-control"></div>
        <label for="sender-name" class="hidden-md-up name control-label label-sender col-xs-12 col-sm-12">Teléfono</label>
        <div class="hidden-md-up col-xs-12 col-sm-12"><input type="tel" class="form-control"></div>
        <label for="sender-name" class="hidden-md-up name control-label label-sender col-xs-12 col-sm-12">Email</label>
        <div class="hidden-md-up col-xs-12 col-sm-12"><input type="email" class="form-control"></div>
        <label for="sender-name" class="hidden-md-up name control-label label-sender col-xs-12 col-sm-12">Compañía</label>
        <div class="hidden-md-up col-xs-12 col-sm-12"><input type="text" class="form-control"></div>
        <label for="message-text" class="hidden-md-up control-label label-message col-xs-12 col-sm-12">Mensaje</label>
        <div class="hidden-md-up col-xs-12 col-sm-12"><textarea id="message" class="form-control"></textarea></div>
        <div class="hidden-md-up contact-buttons text-right col-xs-12 col-sm-12">
            <button id="btn_send_message" type="button" class="btn btn-primary glyphicon glyphicon glyphicon-ok"></button>
        </div>
    </form>
    <div id="company-info" class="col-xs-12 col-sm-12">
        <label for="message-text" class="control-label label-message">La Pradera</label>
        <p>Parroquia Belisario Quevedo</p>
        <p>Panamericana Sur Km.6</p>
        <p>Latacunga - Ecuador</p>
        <div id="contacts">
            <p><i class="fa fa-phone"></i>32266222 - 32266333 - 32266444</p>
            <p><i class="fa fa-envelope"></i>ventas@cerealeslapradera.com</p>
        </div>
    </div>
</div>
<div id="volver" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a href="<?php echo base_url('index.php/home/index')?>">Volver</a>
</div>
</body>
</html>