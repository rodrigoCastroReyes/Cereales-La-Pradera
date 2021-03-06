<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>La Pradera</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"/>
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/images/logo.ico')?>' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/flex.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_elements.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/nav_bar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/historia.css')?>">
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery-1.11.3.min.js')?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery.scrollUp.min.js')?>" ></script>
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
            height:350px;
        }
    </style>
    <script>
        $(function () {

            /*$.scrollUp({
             animation: 'fade',
             activeOverlay: '#00FFFF',
             scrollText: 'Ir Arriba'
             });*/

            var current_index = 0;
            var current_img = 1;
            var mediaquery = window.matchMedia("(min-width : 768px)");
            if (mediaquery.matches) {
                var images = ["/assets/images/historia/Foto1.jpg","/assets/images/historia/Foto2.jpg","/assets/images/historia/Foto3.jpg"
                    ,"/assets/images/historia/Foto4.jpg","/assets/images/historia/Foto5.jpg","/assets/images/historia/Foto6.jpg","/assets/images/historia/Foto7.jpg","/assets/images/historia/Foto8.jpg"]
            } else {
                var images = ["/assets/images/historia/Foto1_mobil.jpg",
                    "/assets/images/historia/Foto2_mobil.jpg",
                    "/assets/images/historia/Foto3_mobil.jpg",
                    "/assets/images/historia/Foto4.jpg",
                    "/assets/images/historia/Foto5_mobil.jpg",
                    "/assets/images/historia/Foto6_mobil.jpg",
                    "/assets/images/historia/Foto7.jpg",
                    "/assets/images/historia/Foto8_mobil.jpg"]
            }


            $("#next").click(function(){

                $(".historia-gallery").css("background-image", 'url("' + images[current_img] + '")');

                current_img+=1;

                if(current_img>7){
                    current_img = 0;
                }

                div_elements = $("#historia-items").children("div");
                console.log(div_elements);
                $(div_elements[current_index]).removeClass().addClass( "historia-desactive" );

                current_index +=1;

                if (current_index > 7)
                    current_index = 0

                $(div_elements[current_index]).removeClass().addClass( "historia-active" );
            })
        });
        $('.link-switch').addClass('active');

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
        <iframe id="video-window" class="embed-responsive-item" src="https://www.youtube.com/embed/Fzk5MpDn_lU" allowfullscreen></iframe>
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
        <div class="historia-aside column-flex justify-content-end hidden-xs col-sm-3 col-md-3">
            <div class="institucional-container column-flex align-items-center justify-content-end" >
                <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/mision')?>">Misión</a>
                <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/vision')?>">Visión</a>
                <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/historia')?>">Historia</a>
            </div>
        </div>
        <div class="historia-body col-xs-12 col-sm-9 col-md-9" style="padding:0px;">
            <div class="historia-gallery">

            </div>
            <div class="historia-aside-mobil hidden-sm-up">
                <div class="institucional-container row-flex align-items-center justify-content-center" >
                    <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/mision')?>">Misión</a>
                    <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/vision')?>">Visión</a>
                    <a class="btn-custom flex-row justify-content-center align-items-center" href="<?php echo base_url('index.php/home/historia')?>">Historia</a>
                </div>
            </div>
            <div class="historia-content colunm-flex">
                <div class="col-sm-offset-1 col-sm-11 col-md-offset-1 col-md-11">
                    <h1 class="historia-title">Historia</h1>
                </div>
                <div id="historia-items" class="col-sm-12 col-md-12">
                    <div class="historia-active text-justify">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">1983</h1>
                        <div class="historia-paragraph col-sm-9 col-md-9">
                            <b>El quiteño Jos&eacute; Simon Fr&iacute;as</b>
                            siembra en la mente de su padre una idea que pronto germinar&iacute;a. Instalar
                            una pequeña industria que sea capaz de absorber la producci&oacute;n de cebada por la que trabajaba
                            su progenitor, en una &eacute;poca en que las importaciones de materia prima para elaborar
                            malta de cerveza compromet&iacute;an las ganancias de los agricultores locales.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">1985</h1>
                        <div class="principal-body-paragraph "><b>Jos&eacute; Simon Amador,</b>
                            motivado por su hijo, construye un galp&oacute;n de 500 m<sup>2</sup> en terrenos
                            de una pequeña propiedad, ubicada en la parroquia Belisario Quevedo de Latacunga. All&iacute; se produce el primer
                            lote de arroz de cebada, con el nombre de la hacienda donde se cultiv&oacute; el sueño, La Pradera.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">1986</h1>
                        <div class="principal-body-paragraph "><b>La cantidad de c&aacute;scara de cebada</b>
                            generada por la maquinaria abre la posibilidad de otro mercado,
                            la elaboraci&oacute;n de balanceados para vacas lecheras, lo que dio el impulso
                            para la instalaci&oacute;n de un nuevo galp&oacute;n de 500 m<sup>2</sup>.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">1990</h1>
                        <div class="principal-body-paragraph"><b>Jos&eacute; Simon Amador</b>
                            cede la planta a su hijo, quien con su deseo de superaci&oacute;n y visi&oacute;n empresarial
                            consigue un cr&eacute;dito para diseñar empaques y construir sus propias enfundadoras.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 ">1992</h1>
                        <div class="principal-body-paragraph"><b>Se adquiere la primera m&aacute;quina</b>
                            autom&aacute;tica para empacado de granos secos con la cual
                            inicia la venta de este producto a los supermercados del pa&iacute;s.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 ">1999</h1>
                        <div class="principal-body-paragraph "><b>Cereales La Pradera</b>
                            entra a los principales supermercados del pa&iacute;s con su producto.
                            Un año despu&eacute;s adquiere un cortador y un laminador
                            de avena, comienza la importaci&oacute;n de la materia prima desde Chile e incluye
                            Avena La Pradera a su portafolio.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">2013</h1>
                        <div class="principal-body-paragraph"><b>Realiza una inversi&oacute;n</b>
                            de alrededor de 400.000 d&oacute;lares en equipos y adecuaciones sanitarias
                            para la planta industrial. Contin&uacute;a el desarrollo de nuevos
                            productos de granos secos y harinas.
                        </div>
                    </div>
                    <div class="historia-desactive">
                        <h1 class="historia-subtitle col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1">2016</h1>
                        <div class="principal-body-paragraph"><b>Incorpora las l&iacute;neas de producci&oacute;n</b>
                            de harinas libres de gluten y alimentos precocidos, con una inversi&oacute;n de 200.000
                            d&oacute;lares Cereales La Pradera cuenta con una infraestructura de 3.500 m<sup>2</sup> y
                            elabora cerca de 50 productos con materias primas de cultivos propios, en su mayor&iacute;a;
                            convenios de siembra y otras importadas de Chile, Argentina, Canad&aacute; y
                            Tailandia.
                        </div>
                    </div>
                </div>
                <div id="next" class="historia-next">
                </div>
                <a class="historia-back" href="javascript:history.back()">
                    <span>VOLVER</span>
                </a>
            </div>
        </div>
        <div class="historia-logo row-flex justify-content-center hidden-sm-up ">
        </div>
    </div>
</div>
</body>
</html>