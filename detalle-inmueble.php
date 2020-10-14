<?php $page = "inmuebles";
require 'controllers/detalleInmuebleController.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Inmueble</title>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="./css/carousel.tamanos.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
</head>

<body>

    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- Fin de Menu -->
    <div class="container-fluid body">
        <div class="properties-details-page content-area-16" id="detalle-inmueble">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide">
                            <div class="heading-properties">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="float-left">
                                            <h3><?php echo $tipo_inmueble . ' en ' . $gestion; ?></h3>
                                            <p><i class="fa fa-map-marker"></i> <?php echo $barrio . ', ' . $ciudad; ?>
                                            </p>
                                        </div>
                                        <div class="p-r">
                                            <h3><?php precio_validar($r) ?> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- main slider carousel items -->
                            <section class="mt-3" id="slide-detalle">
                                <?php
                                if (isset($r['fotos'])) {
                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                        echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                    }
                                } else {
                                    echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                }
                                ?>
                            </section>
                            <section class="vertical-center-4 slider" id="miniaturas">
                                <?php
                                if (isset($r['fotos'])) {
                                    for ($i = 0; $i < count($r['fotos']); $i++) {
                                        echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                    }
                                } else {
                                    echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                }
                                ?>
                            </section>
                            <!-- script para iniciar el caousel -->
                        </div>
                        <!-- Compartir por redes sociales                                 -->
                        <div class="card compartir">
                            <div class="card-body row">
                                <div class="col-12 col-md-3 pl-0 text-center text-md-left"><a class="btn btn-color" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=254-<?php echo $co ?>" target="_blank">Imprimir Ficha</a></div>
                                <div class="col-12 col-md-3 offset-md-3 text-center text-md-left">Compartir por:</div>
                                <div class="col-4 col-md-1">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pendiente.com%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank">
                                        <i class="fab fa-facebook-square"></i></a>
                                </div>
                                <div class="col-4 col-md-1">
                                    <a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.pendiente.com%2FdetalleInmueble%3Fcodigo%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank">
                                        <i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="col-4 col-md-1">
                                    <a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.supropiedadinmobiliaria.com/detalleInmueble.php?codigo%3d' . $co ?>" target="_blank">
                                        <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Fin compartir por redes sociales -->
                        <!-- descripcion -->
                        <div class="description">
                            <h3>Descripción</h3>
                            <p>
                                <?php echo $descripcion; ?>
                            </p>
                        </div>
                        <!-- Detalles de la propiedad -->
                        <div class="property-details mb-60">
                            <h3 class="heading">Características Principales</h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <ul>
                                        <li>
                                            <strong>Código:</strong><?php echo $co; ?>
                                        </li>
                                        <li>
                                            <strong>Precio:</strong> <?php precio_validar($r) ?>
                                        </li>
                                        <li>
                                            <strong>Baños:</strong> <?php echo $banios; ?>
                                        </li>
                                        <li>
                                            <strong>Alcobas:</strong><?php echo $alcobas; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul>
                                        <li>
                                            <strong>Gestión:</strong> <?php echo $gestion; ?>
                                        </li>
                                        <li>
                                            <strong>Tipo de Inmueble:</strong> <?php echo $tipo_inmueble; ?>
                                        </li>
                                        <li>
                                            <strong>Área Total:</strong> <?php echo $area_privada; ?> m<sup>2</sup>
                                        </li>
                                        <li>
                                            <strong>Área Construida:</strong> <?php echo $area_construida; ?>
                                            m<sup>2</sup>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul>
                                        <li>
                                            <strong>Antiguedad:</strong> <?php echo $edad_inmueble; ?> año(s)
                                        </li>
                                        <li>
                                            <strong>Estrato:</strong> <?php echo $estrato; ?>
                                        </li>
                                        <li>
                                            <strong>Garaje:</strong><?php echo $garaje; ?>
                                        </li>
                                        <?php if ($administracion > 0) {
                                            echo '
                                            <li>
                                                <strong>Administracíon</strong>' . $administracion . '
                                            </li>
                                            ';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Caracteristicas internas -->
                        <?php
                        if (count($r['caracteristicasInternas']) > 0) {
                            echo
                                '<div class="amenities-box af mb-60">
                                <h3 class="heading">Características Internas</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                        </div>
                                    </div>
                            </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="amenities-box af mb-60">
                                <h3 class="heading">Características Externas</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                        </div>
                                    </div>
                            </div>
                            ';
                        }
                        ?>
                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="amenities-box af mb-60">
                                <h3 class="heading">Características Alrededores</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                        </div>
                                    </div>
                            </div>
                            ';
                        }
                        ?>
                        <?php if ($r['video'] != "") {
                            echo '
                             <div class="property-video mb-60">
                                <h3 class="heading">Video</h3>
                                <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            ';
                        } ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!-- llamar asesor -->
                        <div class="contact-1 financing-calculator widget">
                            <h5 class="sidebar-title">Nosotros te llamamos</h5>
                            <form action="email/detalleCorreo.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Nombres</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teléfono</label>
                                    <input type="number" name="telefono" class="form-control" placeholder="Teléfono" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Correo</label>
                                    <input type="email" name="correo" class="form-control" placeholder="Correo" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mensaje</label>
                                    <textarea name="mensaje" class="form-control" rows="1" required></textarea>
                                </div>

                                <div class="form-group" style="display:none">
                                    <label class="form-label"></label>
                                    <input type="hidden" name="tipoIn" value="<?php echo $tipo_inmueble ?>">
                                </div>
                                <div class="form-group" style="display:none">
                                    <label class="form-label"></label>
                                    <input type="hidden" name="tipoGes" value="<?php echo $gestion; ?>">
                                </div>
                                <div class="form-group" style="display:none">
                                    <label class="form-label"></label>
                                    <input type="hidden" name="codigo" value="<?php echo $co; ?>">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="gridCheck">
                                        <small>
                                            Confirmo que he leído, entendido y acepto la <a href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política
                                                de tratamiento de datos personales</a>
                                        </small>
                                    </label>
                                </div>
                                <br>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-color btn-md btn-message btn-block">Enviar</button>
                                </div>
                            </form>
                        </div>

                        <!-- Aliados -->
                        <div class="widget recent-posts">
                            <h5 class="sidebar-title">Nuestros Aliados</h5>
                            <div class="owl-carousel owl-theme" id="owl-aliados">
                                <?php
                                for ($i = 0; $i < count($logos_aliados); $i++) {
                                    echo '<div class="item">
                                            <img src="' . $logos_aliados[$i] . '" alt="" style="width:40%; margin:auto;">
                                    </div>';
                                }
                                ?>
                            </div>
                            <!-- Similares -->
                            <div class="widget recent-posts">
                                <h5 class="sidebar-title">Propiedades Similares</h5>
                                <?php similares($r['IdCiudad'], $r['IdTpInm']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.php'; ?>
    <script>
        var pagina = false;
    </script>
    <!-- importantes mantener el orden-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/scripts.js"></script>
    <!-- inicilizar carousel -->
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- inicializar aliados -->
    <script>
        $('#owl-aliados').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1200,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>