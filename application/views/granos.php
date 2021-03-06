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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>"/>
    <!--<link rel="stylesheet" type="text/css" href="css/granos.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/product_lists.css')?>"/>
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
            <span class="btn-custom" style="margin-right: 1%">Granos Secos</span>
            <a class="btn-custom" href="<?php echo base_url('index.php/home/enlatados')?>" >Enlatados</a>
        </div>
        <div class="description">
            <div class="title">Granos Secos</div>
            <div class="description-info"><b>El fr&eacute;jol, la lenteja, la arveja y el garbanzo</b>
                son m&aacute;s ricos en hierro y calcio que la
                mayor&iacute;a de los cereales. Por ello, la importancia de su consumo en la dieta de niños
                y adultos. Cereales La Pradera ofrece a sus consumidores una gran variedad de granos secos, seleccionados
                rigurosamente, que aportan a las vitaminas y prote&iacute;nas caracter&iacute;sticas de estos alimentos.
            </div>
        </div>
        <div class="product-list">
            <h1 class="subtitle">Lista de Productos</h1>
            <div class="product-description col-xs-11">
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Arveja-Verde.jpg')?>"/>
                        <div class="image-title text-center">Arveja verde</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Canguil-Americano.jpg')?>"/>
                        <div class="image-title text-center">Canguil Americano</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Chulpi.jpg')?>"/>
                        <div class="image-title text-center">Chulpi</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Alegre.jpg')?>"/>
                        <div class="image-title text-center">Frejol Alegre</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Blanco-bolon.jpg')?>"/>
                        <div class="image-title text-center">Frejol Blanco Bol&oacute;n</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-canario.jpg')?>"/>
                        <div class="image-title text-center">Frejol Canario Bol&oacute;n</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Rojo.jpg')?>"/>
                        <div class="image-title text-center">Frejo Rojo Bol&oacute;n</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-negro.jpg')?>"/>
                        <div class="image-title text-center">Frejol Negro</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-panamito.jpg')?>"/>
                        <div class="image-title text-center">Frejol Panamito</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Lenteja.jpg')?>"/>
                        <div class="image-title text-center">Lenteja</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Maiz-amarillo.jpg')?>"/>
                        <div class="image-title text-center">Ma&iacute;z Suave para tostar</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Mani.jpg')?>"/>
                        <div class="image-title text-center">Man&iacute;</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Mote-especial.jpg')?>"/>
                        <div class="image-title text-center">Mote Especial</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Quinua.jpg')?>"/>
                        <div class="image-title text-center">Quinua</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Granos-de-soya.jpg')?>"/>
                        <div class="image-title text-center">Soya</div>
                        <div class="product-value text-center"><b>PACK X 250 G</b></div>
                        <div class="product-value text-center"><b>PACK X 500 G</b></div>
                    </div>
                    <div class="container-image col-xs-6">
                        <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Garbanzo.jpg')?>"/>
                        <div class="image-title text-center">Garbanzo</div>
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
            <div class="principal-body-procesados-corner col-md-4"></div>
            <div class="principal-body-procesados col-md-8"></div>
        </div>
        <div class="row-floating buttons-container column-flex justify-content-center">
            <div class="institucional-container column-flex justify-content-space-between">
                <span class="btn-custom row-flex align-items-center justify-content-center">Granos Secos</span>
            </div>
            <div class="institucional-container column-flex justify-content-space-between" style="margin-top: 10%">
                <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/enlatados')?>">Enlatados</a>
            </div>
        </div>
        <div class="logo-container"></div>
        <div class="row description-container">
            <div class="title">Granos Secos</div>
            <div class="description-info"><b>El fr&eacute;jol, la lenteja, la arveja y el garbanzo</b>
                son m&aacute;s ricos en hierro y calcio que la
                mayor&iacute;a de los cereales. Por ello, la importancia de su consumo en la dieta de niños
                y adultos. Cereales La Pradera ofrece a sus consumidores una gran variedad de granos secos, seleccionados
                rigurosamente, que aportan a las vitaminas y prote&iacute;nas caracter&iacute;sticas de estos alimentos.
            </div>
        </div>
        <div class="row product-container">
            <div class="product-list">
                <h1 class="subtitle">Lista de Productos</h1>
                <div class="product-description col-sm-12 col-md-12">
                    <div class="col-sm-12 col-md-12">
                        <div class="container-image col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Arveja-Verde.jpg')?>"/>
                            <div class="image-title text-center">Arveja verde</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Canguil-Americano.jpg')?>"/>
                            <div class="image-title text-center">Canguil Americano</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Chulpi.jpg')?>"/>
                            <div class="image-title text-center">Chulpi</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Alegre.jpg')?>"/>
                            <div class="image-title text-center">Frejol Alegre</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Blanco-bolon.jpg')?>"/>
                            <div class="image-title text-center">Frejol Blanco Bol&oacute;n</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="container-image col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-canario.jpg')?>"/>
                            <div class="image-title text-center">Frejol Canario Bol&oacute;n</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-Rojo.jpg')?>"/>
                            <div class="image-title text-center">Frejo Rojo Bol&oacute;n</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-negro.jpg')?>"/>
                            <div class="image-title text-center">Frejol Negro</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Frejol-panamito.jpg')?>"/>
                            <div class="image-title text-center">Frejol Panamito</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Lenteja.jpg')?>"/>
                            <div class="image-title text-center">Lenteja</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="container-image col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Maiz-amarillo.jpg')?>"/>
                            <div class="image-title text-center">Ma&iacute;z Suave para tostar</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Mani.jpg')?>"/>
                            <div class="image-title text-center">Man&iacute;</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Mote-especial.jpg')?>"/>
                            <div class="image-title text-center">Mote Especial</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Quinua.jpg')?>"/>
                            <div class="image-title text-center">Quinua</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                        <div class="container-image col-sm-2 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Granos-de-soya.jpg')?>"/>
                            <div class="image-title text-center">Soya</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="container-image col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                            <img class="image-pic" src="<?php echo base_url('assets/images/granos secos/Garbanzo.jpg')?>"/>
                            <div class="image-title text-center">Garbanzo</div>
                            <div class="product-value text-center"><b>PACK X 250 G</b></div>
                            <div class="product-value text-center"><b>PACK X 500 G</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="volver" class="col-sm-11 col-md-11 text-right">
            <a href="<?php echo base_url('index.php/home/index')?>">Volver</a>
        </div>
    </div>

</div>
</body>
</html>