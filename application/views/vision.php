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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/institucional.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
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
        #myCarousel2{
            height: 100%;
            margin: 0px;
            padding: 0px;
        }
        .carousel-inner{
            height: 100%;
        }

        .carousel-indicators{
            margin-bottom: 5px;
            bottom: 0px;
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
        .carousel-inner > .item > img{
            width:100%;
        }

        .side-bar-image {
            background-image:url('/assets/images/vision/FotoMain_mobil.jpg');
        }
    </style>
    <script>
        $(function () {
            $('#popvideo').modal('show');
            $("#popvideo").on('hidden.bs.modal', function (e) {
                $("#popvideo iframe").attr("src", $("#popvideo iframe").attr("src"));
            });
        });
    </script>
</head>
<body>
<div class="modal fade" id="popvideo">
    <div id="video-container" class="modal-content embed-responsive">
        <iframe id="video-window" class="embed-responsive-item" src="https://www.youtube.com/embed/d-9xo7b9le8" allowfullscreen></iframe>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->
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
    <div class="row">
        <div class="side-bar col-sm-3 col-md-3 column-flex justify-content-center hidden-sm-down" style="padding:0px;">
            <div class="side-bar-image ">
                <div></div>
            </div>
            <div class="side-bar-institucional col-md-12 column-flex align-items-center">
                <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/mision')?>">Misi&oacute;n</a>
                <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/vision')?>">Visi&oacute;n</a>
                <a class="btn-custom row-flex justify-content-center align-items-center" href="<?php echo base_url('index.php/home/historia')?>">Historia</a>
            </div>
        </div>
        <div class="principal-container col-xs-12 col-sm-9 col-md-9 " style="padding:0px;">
            <div class="principal-mision hidden-sm-down" >
                <div class="principal-mision-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div id="slider-imgs" class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url('assets/images/vision/FotoMain.jpg')?>" alt="slide">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assets/images/vision/Foto2.jpg')?>" alt="slide">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assets/images/vision/Foto3.jpg')?>" alt="slide">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="principal-mision-buttons row-flex justify-content-center align-items-center hidden-md-up">
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/mision')?>">Misi&oacute;n</a>
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/vision')?>">Visi&oacute;n</a>
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/historia')?>">Historia</a>
                </div>
            </div>
            <div class="principal-mision-logo row-flex justify-content-center hidden-md-up ">
            </div>
            <div class="principal-mision hidden-md-up" >
                <div class="principal-mision-slider">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0"  class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div id="slider-imgs" class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url('assets/images/vision/FotoMain_mobil.jpg')?>" alt="slide">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assets/images/vision/Foto2_mobil.jpg')?>" alt="slide">
                            </div>
                            <div class="item">
                                <img  src="<?php echo base_url('assets/images/vision/Foto3_mobil.jpg')?>" alt="slide">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="principal-mision-buttons row-flex justify-content-center align-items-center hidden-md-up">
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/mision')?>">Misi&oacute;n</a>
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/vision')?>">Visi&oacute;n</a>
                    <a class="btn-custom row-flex align-items-center justify-content-center" href="<?php echo base_url('index.php/home/historia')?>">Historia</a>
                </div>
            </div>
            <div class="principal-section">
                <section class="col-md-12">
                    <h1 class="principal-section-title">Visi&oacute;n</h1>
                    <p  class="principal-section-paragraph">
                        <strong>Seremos un grupo empresarial </strong> de la industria de alimentos, con alcance internacional, creando valor para sus clientes, colaboradores y accionistas mediante la diferenciación de sus productos y servicios.
                        Nuestro éxito comercial se sustentará en la responsabilidad social y la innovación de productos y servicios de alto valor, percibido para el mercado industrial, mayorista y de consumo.</br>
                    </p>
                    <a class="principal-section-back" href="javascript:history.back()">
                        <span>VOLVER</span>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <div class="logo-container-mision">
    </div>
</div>
</body>
</html>