<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->
<?php

require("quick-contact.php");
$newToken = generateFormToken('form1');

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rafael Angel | Detalles</title>
    <!-- Datos para compartir por facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rafael Angel | Detalles" >
    <meta property="og:url" content="https://rafaelangel.com.co/detalles.php?id=<?php echo $_GET["id"] ?>">
    <meta property="og:image" itemprop="image" content="http://www.dexcon.co/RafaelAngel/images/logoR.png">
    <meta property="og:description" content="Mira este increible Inmueble" >
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <!-- fin de datos para compartir por facebook -->
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rafael Angel" >
    <meta name="twitter:image" content="http://dexcon.co/RafaelAngel/images/logoR.png">
    <meta name="twitter:description" content="Mira este increible Inmueble" >
    <!-- fin de datos para compartir por twitter -->

    <link rel="shortcut icon" href="images/favicon.png">
    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet" />
    <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
    <link href="libraries/fonts/font-awesome.min.css" rel="stylesheet" />
    <link href="libraries/animate/animate.min.css" rel="stylesheet" />
    <link href="libraries/checkbox/minimal.css" rel="stylesheet" />
    <link href="libraries/drag-drop/drag-drop.css" rel="stylesheet" />
    <link href="css/components.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <!--link href="submit-property.css" rel="stylesheet"/-->
    <link href="css/media.css" rel="stylesheet" />
    <style type="text/css">
        .floating-button {
            width: 75px;
            height: 60px;
            border-radius: 50%;
            background: transparent;
            position: fixed;
            bottom: 60px !important;
            right: 80px;
            cursor: pointer;
            z-index: 600;
            text-align: center;
        }

        .tl-adiltional-box h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .tl-adiltional-box h4 .fa {
            font-size: 14px;
            margin-right: 12px;
        }

        .buttonContact {
            border-radius: 30px !important;
            padding: 6px 12px !important;
            font-size: 14px !important;
            border-color: #DF1F25;
        }

        .buttonContact:hover {
            background: #fa454b !important;
            border-color: #fa454b !important;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>      <script src="js/html5/html5shiv.min.js"></script>      <script src="js/html5/respond.min.js"></script>    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <?php include("analytics.php"); ?>
</head>

<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">

    <?php include "cargar.php"; ?>
    <?php include "header.php"; ?>
    <!-- Page Content -->
    <div class="page-content">
        <!-- Property Detail Page -->
        <div class="property-main-details">
            <!-- container -->
            <div class="container">
                <div class="property-details-content property-details-content2 container-fluid p_z">
                    <!-- col-md-9 -->
                    <div class="col-md-8 col-sm-6 p_l_z">
                        <!-- Slider Section -->
                        <div id="property-detail1-slider" class="carousel slide property-detail1-slider" data-ride="carousel"> </div>
                        <!-- Slider Section /- -->
                        <div class="property-header" id="dph"> </div>
                        <div class="single-property-details" id="dpd"> </div>
                        <div class="property-direction pull-left">
                            <h3>Mapa</h3>
                            
                            <div class="property-map">
                                <div id="gmap" class="mapping"></div>
                            </div>
                            <div class="property-map contact-agent">
                                <div class="col-md-12 agent-information p_z">
                                    <div class="agent-info">
                                        <p><i class="fa fa-phone"></i>2883388</p>
                                        <p> <i class="fa fa-envelope-o"></i> <a href="mailto:rafaelangel40@gmail.com" title="mail">rafaelangel40@gmail.com</a> </p>
                                        <!-- <p><i class="fa fa-fax"></i>041-789-4561</p> -->
                                    </div>
                                    <div class="agent-form">
                                        <h3>Enviar Mensaje</h3>
                                        <form>
                                            <div class="col-md-6 p_l_z">
                                                <input type="text" placeholder="Nombre" /> </div>
                                            <div class="col-md-6 p_r_z">
                                                <input type="text" placeholder="Apellido" /> </div>
                                            <div class="col-md-6 p_l_z">
                                                <input type="email" placeholder="Correo" /> </div>
                                            <div class="col-md-6 p_r_z">
                                                <input type="text" placeholder="Telefono" /> </div>
                                            <input type="text" placeholder="Mensaje" />
                                            <input type="submit" value="Enviar" class="btn">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-md-9 /- -->
                    <!-- col-md-3 -->
                    <div class="col-md-4 col-sm-6 p_r_z property-sidebar">
                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
                        <aside class="widget widget-search">

                            <h2 class="widget-title"><span>Buscador</span></h2>

                            <form style="text-align: center;">

                                <select id="SelectGestion" name="tip_ope">

                                    <!-- <option value="0">¿Que buscas?</option> -->

                                    <option value="1">ARRIENDO</option>

                                    <!-- <option value="2">Arriendo/Venta</option> -->

                                    <!-- <option value="3">Avaluos</option> -->

                                    <option value="5">VENTA</option>

                                </select>

                                <select id="SelectTipo" name="tip_inm">

                                </select>

                                <select id="SelectCiudad" name="ciudad">

                                </select>

                                <select id="SelectZona" name="zona">

                                </select>

                                <a id="MasProp" title="search" onclick="buscarPropiedadBuscador()" class="btn">Buscar</a>

                            </form>
                        </aside>

                        <aside class="widget widget-search">

                            <center>
                                <h3 class=""><span>CONTACTO INMOBILIARIA</span></h3>
                            </center>
                            <p>
                                <br>
                                <span><i class="fas fa-envelope"></i> rafaelangel40@gmail.com</span>
                                <br> <br>
                                <span><i class="fas fa-phone"></i> 2883388</span>
                                <!-- <h4>Celular:</h4> -->
                            </p>
                            <form style="text-align: center;" id="contact">
                                <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                                <input type="hidden" name="origin" value="1">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="Nombre" required aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="Correo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-asunto" name="contact-asunto" placeholder="Asunto" required>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="contact-message" name="contact-message" placeholder="Mensaje"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary buttonContact col-md-12">Enviar</button><br><br>
                                <a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/FichaInmueble.php?reg=<?php echo $_GET["id"] ?>" target="_blank" class="btn btn-primary buttonContact col-md-12">Imprimir ficha</a><br><br>
                            </form>
                            <div class="col-md-12 col-sm-12">
                                <div id="alert-msg" class="alert-msg"></div>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary buttonContact col-md-12">Enviar a amigo</button><br><br> -->
                        </aside>
                    </div>
                    <!-- col-md-3 /- -->
                </div>
            </div>
            <!-- container /- -->
        </div>
        <!-- Property Detail Page /- -->
    </div>
    <!-- Page Content -->
    <?php include "footer.php" ?>
    <!-- jQuery Include -->
    <script src="libraries/jquery.min.js"></script>
    <script src="libraries/jquery.easing.min.js"></script>
    <!-- Easing Animation Effect -->
    <script src="libraries/bootstrap/bootstrap.min.js"></script>
    <!-- Core Bootstrap v3.2.0 -->
    <script src="libraries/modernizr/modernizr.custom.37829.js"></script>
    <!-- Modernizer -->
    <script src="libraries/jquery.appear.js"></script>
    <!-- It Loads jQuery when element is appears -->
    <script src="libraries/owl-carousel/owl.carousel.min.js"></script>
    <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <script src="libraries/checkbox/icheck.min.js"></script>
    <!-- Check box -->
    <script src="libraries/drag-drop/jquery.tmpl.min.js"></script>
    <!-- Drag Drop file -->
    <script src="libraries/drag-drop/drag-drop.js"></script>
    <!-- Drag Drop File -->
    <script src="libraries/drag-drop/modernizr.custom.js"></script>
    <!-- Drag Drop File -->
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyAlXyIM8zL7negVqIAb-WeuOuFQJ5vjDXo'></script>
    <script src="libraries/gmap/jquery.gmap.min.js"></script>
    <!-- map -->
    <script src="libraries/expanding-search/classie.js"></script>
    <script src="libraries/expanding-search/uisearch.js"></script>
    <!-- Customized Scripts -->
    <script src="js/functions.js"></script>
    <script id="imageTemplate" type="text/x-jquery-tmpl">
        <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="imageholder">
                            <figure> <img src="${filePath}" alt="${fileName}" /> </figure>
                        </div>
                    </div>
                </script>
    <script type="text/javascript" src="js/simi.js"></script>
    <script type="text/javascript">
        cargarInmueble("<?php echo $_GET["id"] ?>");
    </script>

    <script>
        $(function() {
            $(document).on("submit", "#contact", function(e) {
                e.preventDefault();
                var mydata = $(this).closest("form").serialize();
                $.ajax({

                    type: "POST",

                    dataType: "json",

                    url: "quick-contact.php",

                    data: mydata,

                    success: function(data) {



                        if (data["type"] == "error") {

                            $("#alert-msg").html(data["msg"]);

                            $("#alert-msg").removeClass("alert-msg-success");

                            $("#alert-msg").addClass("alert-msg-failure");

                            $("#alert-msg").show();

                        } else {

                            $("#alert-msg").html(data["msg"]);

                            $("#alert-msg").addClass("alert-msg-success");

                            $("#alert-msg").removeClass("alert-msg-failure");

                            $("#input_name").val("");

                            $("#input_email").val("");

                            $("#input_phone").val("");

                            $("#textarea_message").val("");

                            $("#alert-msg").show();

                        }



                    },

                    error: function(xhr, textStatus, errorThrown) {

                        //alert(textStatus);

                    }
                });
            });
        });
    </script>
</body>



</html>