<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>La Pradera</title>
    <meta charset="UTF-8">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/images/logo.ico')?>' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/product_lists.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/harinas.css')?>">
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery.scrollUp.min.js')?>" ></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3GG1bWOb8u2eCEteiCY1yGnaKrqgW6R4&libraries=places"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <script>
        $(function () {
            $.scrollUp({
                animation: 'fade',
                activeOverlay: '#00FFFF',
                scrollText: 'Ir Arriba'
            });
        });
        $('.link-switch').addClass('active');
    </script>
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
<div class="procesados-main hidden-md-up">
    <div class="principal-body">
        <div class="picture_row">
            <div class="principal-body-procesados col-xs-12">
                <div class="logo-container"></div>
            </div>
        </div>
        <div id="buttons_bar" class="text-center">
            <a class="btn-custom" style="margin-right: 1%" href="<?php echo base_url('index.php/home/harinas')?>">Harinas</a>
            <span class="btn-custom" href="<?php echo base_url('index.php/home/harinas_free')?>">Harinas Gluten Free</span>
        </div>
        <div class="description">
            <div id="title_free">Harinas Gluten Free</div>
            <div class="description-info"><b>Cereales La Pradera</b>
                cuenta con una planta exclusiva para la elaboraci&oacute;n de harinas libres de gluten,
                a base de cereales que no contienen esta prote&iacute;na, perjudicial para la salud de los
                cel&iacute;acos. Desde la selecci&oacute;n de la materia prima hasta el producto final, el proceso
                garantiza el aislamiento de los alimentos para evitar su contaminaci&oacute;n y la preservaci&oacute;n
                de sus beneficios nutricionales.
            </div>
        </div>
        <div class="product-list">
            <h1 class="subtitle">Lista de Productos</h1>
            <div class="product-description col-xs-11">
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Maicena.jpg')?>"/>
                        <div class="image-title text-center">Maicena</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Almidon-de-yuca.jpg')?>"/>
                        <div class="image-title text-center">Almidón de yuca</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Quinua.jpg')?>"/>
                        <div class="image-title text-center">Quinua</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Harina-de-haba.jpg')?>"/>
                        <div class="image-title text-center">Harina de haba</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Harina-de-Arveja.jpg')?>"/>
                        <div class="image-title text-center">Harina de arveja</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="procesados-main hidden-sm-down">
    <div class="principal-body">
        <div class="row banner-container">
            <div class="principal-body-procesados-corner-free col-md-4"></div>
            <div class="principal-body-procesados col-md-8"></div>
        </div>
        <div class="row-floating buttons-container column-flex justify-content-center">
            <div class="institucional-container column-flex justify-content-space-between ">
                <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/harinas')?>">Harinas</a>
            </div>
            <div class="institucional-container column-flex justify-content-space-between" style="margin-top: 10%">
                <span id="harina-free" class="btn-custom row-flex align-items-center justify-content-center">Harinas Gluten Free</span>
            </div>
        </div>
        <div class="logo-container"></div>
        <div class="row description-container">
            <div class="title">Harinas Gluten Free</div>
            <div class="description-info"><b>Cereales La Pradera</b>
                cuenta con una planta exclusiva para la elaboraci&oacute;n de harinas libres de gluten,
                a base de cereales que no contienen esta prote&iacute;na, perjudicial para la salud de los
                cel&iacute;acos. Desde la selecci&oacute;n de la materia prima hasta el producto final, el proceso
                garantiza el aislamiento de los alimentos para evitar su contaminaci&oacute;n y la preservaci&oacute;n
                de sus beneficios nutricionales.
            </div>
        </div>
        <div class="row product-container">
            <div class="product-list">
                <h1 class="subtitle">Lista de Productos</h1>
                <div class="product-description col-sm-12 col-md-12">
                    <div class="container-image col-sm-offset-1 col-md-offset-1 col-sm-2 col-md-2">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Maicena.jpg')?>"/>
                        <div class="image-title text-center">Maicena</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-sm-2 col-md-2">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Almidon-de-yuca.jpg')?>"/>
                        <div class="image-title text-center">Almidón de yuca</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-sm-2 col-md-2">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Quinua.jpg')?>"/>
                        <div class="image-title text-center">Quinua</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-sm-2 col-md-2">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Harina-de-haba.jpg')?>"/>
                        <div class="image-title text-center">Harina de haba</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-sm-2 col-md-2">
                        <img class="image-pic" src="<?php echo base_url('assets/images/harinas free/Harina-de-Arveja.jpg')?>"/>
                        <div class="image-title text-center">Harina de arveja</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div id="volver" class="col-sm-11 col-md-11 text-right">
                    <a href="<?php echo base_url('index.php/home/index')?>">Volver</a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>