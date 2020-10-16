<?php
// exit("Mantenimiento");
// error_reporting(E_ALL ^ E_NOTICE);
// ini_set('display_errors', '1');

?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->

<head>
	<!-- Smartlook -->
	<script>
		window.smartlook || (function(d) {
			var o = smartlook = function() {
					o.api.push(arguments)
				},
				h = d.getElementsByTagName('head')[0];
			var c = d.createElement('script');
			o.api = new Array();
			c.async = true;
			c.type = 'text/javascript';
			c.charset = 'utf-8';
			c.src = 'https://rec.smartlook.com/recorder.js';
			h.appendChild(c);
		})(document);
		smartlook('init', 'd3b3986f26228c8f065e9ab1507bf0b671f827fb');
	</script>
	<!-- Smartlook -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Rafael Angel</title>
	<!-- Datos para compartir por facebook -->
	<meta property="og:image" itemprop="image" content="https://rafaelangel.com.co/images/logoR.png">
	<meta property="og:title" content="Rafael Angel">
	<meta property="og:url" content="https://rafaelangel.com.co">
	<meta property="og:description" content="Llevamos más de seis décadas dedicados al sector inmobiliario, y entendemos que el éxito de nuestra actividad se construye sobre el ejercicio de lograr la plena satisfacción de nuestros clientes, garantizar la confianza y la tranquilidad en todos los negocios en los que participamos, y cultivar las relaciones por encima de las transacciones.">
	<!-- fin de datos para compartir por facebook -->
	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Rafael Angel">
	<meta name="twitter:image" content="https://rafaelangel.com.co/images/logoR.png">
	<meta name="twitter:description" content="Llevamos más de seis décadas dedicados al sector inmobiliario, y entendemos que el éxito de nuestra actividad se construye sobre el ejercicio de lograr la plena satisfacción de nuestros clientes, garantizar la confianza y la tranquilidad en todos los negocios en los que participamos, y cultivar las relaciones por encima de las transacciones.">
	<!-- fin de datos para compartir por twitter -->
	<!-- Para whatsapp -->
	<meta property="og:image" content="https://rafaelangel.com.co/images/logoR.png" />
	<meta property="og:image:secure_url" content="https://rafaelangel.com.co" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="300" />
	<meta property="og:image:height" content="300" />
	<meta property="og:description" content="Llevamos mas de seis decadas dedicados al sector inmobiliario, y entendemos que el exito de nuestra actividad se construye sobre el ejercicio de lograr la plena satisfaccion de nuestros clientes, garantizar la confianza y la tranquilidad en todos los negocios en los que participamos, y cultivar las relaciones por encima de las transacciones.">
	<!-- fin Para whatsapp -->
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet" />
	<link href="css/whatsapp.css" rel="stylesheet" />
	<linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet" /> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet" /> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet" />
	<link href="libraries/animate/animate.min.css" rel="stylesheet" />
	<link href="css/components.css" rel="stylesheet" />
	<link href="style.css?version=2" rel="stylesheet" />
	<link href="css/media.css?version=1" rel="stylesheet" />
	<!--font awsome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5/html5shiv.min.js"></script>
	<script src="js/html5/respond.min.js"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<?php include("analytics.php"); ?>
</head>

<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">

	<?php include "cargar.php"; ?>
	<?php include "header.php"; ?>

	<!-- Page content -->
	<div class="page-content">
		<!-- Slider block -->
		<div class="slider-block container-fluid p_z">
			<!-- Slider Section -->
			<div id="property-slider" class="carousel slide slider-section slider-section2" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active myitem">
						<!-- <img src="images/slider/1.jpg" alt="Slide 1"> -->
						<img src="images/slider/3.jpg?version=1" width="100%" alt="Rafael Angel" class="slide1">
						<!-- <div class="carousel-caption">
								<h4>$480,000 </h4>
								<h3>Florida 5, Pinecrest, FL</h3>
								<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
								<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
						</div> -->
					</div>
					<div class="item myitem">
						<!-- <img src="images/slider/1.jpg" alt="Slide 1"> -->
						<img src="images/slider/1.jpg?version=1" width="100%" alt="Rafael Angel" class="slide1">
						<!-- <div class="carousel-caption">
								<h4>$480,000 </h4>
								<h3>Florida 5, Pinecrest, FL</h3>
								<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
								<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
						</div> -->
					</div>
					<div class="item myitem">
						<!-- <img src="images/slider/1.jpg" alt="Slide 1"> -->
						<img src="images/slider/2.jpg?version=1" width="100%" alt="Rafael Angel" class="slide3">
						<!-- <div class="carousel-caption">
								<h4>$480,000 </h4>
								<h3>Florida 5, Pinecrest, FL</h3>
								<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
								<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
						</div> -->
					</div>
					<!-- <div class="item">
							<img src="images/slider/slide-2.jpg" alt="Slide 2">
							<div class="carousel-caption">
									<h4>$480,000 </h4>
									<h3>Florida 5, Pinecrest, FL</h3>
									<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
									<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
							</div>
					</div>
					<div class="item">
							<img src="images/slider/slide-1.jpg" alt="Slide 1">
							<div class="carousel-caption">
									<h4>$480,000 </h4>
									<h3>Florida 5, Pinecrest, FL</h3>
									<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
									<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
							</div>
					</div>
					<div class="item">
							<img src="images/slider/slide-2.jpg" alt="Slide 2">
							<div class="carousel-caption">
									<h4>$480,000 </h4>
									<h3>Florida 5, Pinecrest, FL</h3>
									<p>Lorem ipsum our Latest listed properties and check out the facilities on</p>
									<a href="#" title="caption-arrow" class="caption-arrow"><i class="fa fa-long-arrow-right"></i></a>
							</div>
					</div> -->
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#property-slider" role="button" data-slide="prev">
					<span class="fa fa-long-arrow-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#property-slider" role="button" data-slide="next">
					<span class="fa fa-long-arrow-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- Slider Section /- -->
		</div><!-- Slider Block /- -->

		<div style="background-color: white;height: 25px;"></div>
		<!-- Search Section -->
		<div id="search-section" class="search-section search-section2 container-fluid p_z">
			<!-- Container -->
			<div class="container" style="background-color: white;border-radius: 10px;">
				<!-- col-md-10 -->
				<div class="col-md-10 p_l_z">
					<select id="SelectGestion" name="tip_ope">
						<!-- <option value="0">¿Que buscas?</option> -->
						<option value="1">Arriendo</option>
						<!-- <option value="2">Arriendo/Venta</option> -->
						<!-- <option value="3">Avaluos</option> -->
						<option value="5">Venta</option>
					</select>

					<select id="SelectTipo" name="tip_inm">

					</select>

					<select id="SelectCiudad" name="ciudad">

					</select>
					<select id="SelectZona" name="zona">
					</select>

				</div><!-- col-md-10 /- -->
				<!-- col-md-2 -->
				<div class="col-md-2">
					<div class="section-header">
						<!-- <h3><span>Search</span>Property</h3> -->
						<a title="search" onclick="buscarPropiedadIndex()" class="btn" href="#">Buscar</a>
					</div>
				</div>
				<!-- col-md-2 /- -->
			</div><!-- Container /- -->
		</div><!-- Search Section /- -->
		<!-- Featured Section -->
		<div id="destacados">
		</div><!-- Featured Section /- -->
		<!-- <div id="search-section" class="search-section search-section2 container-fluid p_z">
										<div class="container" style="background-color: white;border-radius: 10px;">
												<div class="blog-listing single-post col-md-12">
														<article>
																<div class="entry-cover col-md-7">
																		<img src="images/dropbox/cajica.jpg" alt="blog" />
																</div>
																<div class="col-md-5">
																		<h3 class="entry-title">Ahora atendemos también toda el &aacute;rea de Sabana Centro</h3>
																		<p style="text-align: justify;">Rafael Angel H. y C&iacute;a abri&oacute; una oficina en Cajic&aacute; en enero de 2018 para ofrecer sus conocimientos y su bagaje como experto en finca ra&iacute;z en una de las zonas de mayor crecimiento del pa&iacute;s. Ahora tenemos asesores comerciales que desde Cajic&aacute; cubren negocios en toda el &aacute;rea de s&aacute;bana Centro: atendemos negocios de venta y arriendo en desde Cota hasta Cajic&aacute;, y desde Tenjo hasta Sopo.</p>
																		<p style="text-align: justify;">&#161;Ac&eacute;rquese a nuestras oficinas, o ll&aacute;menos para agendar una cita! Negocios inmobiliarios en la Sabana y eficiencia con toda propiedad, de la mano de uno los mejores expertos en finca ra&iacute;z de Bogot&aacute;.</p>
																</div>
														</article>
												</div>
										</div>
								</div> -->
		<div id="partner-section" class="partner-section">
			<div class="container">
				<!-- <div class="section-header"> -->
				<!-- <h3>Servicios</h3> -->
				<!-- </div> -->
				<div id="business-partner" class="business-partner">
					<div class="item"><a title="" href="#"><img src="images/aa-listing/1.png" style="margin: 40px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/2.png" style="margin: 40px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/3.jpg" style="margin: 60px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/4.jpg" style="margin: 63px 0px" alt=""></a></div>
					<!-- <div class="item"><a title="" href="#"><img src="images/aa-listing/1.png" alt=""></a></div> -->
					<!-- <div class="item"><a title="" href="#"><img src="images/aa-listing/2.png" alt=""></a></div> -->
					<!-- <div class="item"><a title="" href="#"><img src="images/aa-listing/3.jpg" alt=""></a></div> -->
					<!-- <div class="item"><a title="" href="#"><img src="images/aa-listing/4.jpg" alt=""></a></div> -->
				</div>
			</div>
		</div><!-- Partner Section /- -->
	</div><!-- Page Content -->

	<?php include "footer.php" ?>
	<!-- jQuery Include -->
	<script src="libraries/jquery.min.js"></script>
	<script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->
	<script src="libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.2.0 -->
	<script src="libraries/modernizr/modernizr.custom.37829.js"></script> <!-- Modernizer -->
	<script src="libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
	<script src="libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="libraries/checkbox/icheck.min.js"></script> <!-- Check box -->
	<script src="libraries/drag-drop/jquery.tmpl.min.js"></script> <!-- Drag Drop file -->
	<script src="libraries/drag-drop/drag-drop.js"></script> <!-- Drag Drop File -->
	<script src="libraries/drag-drop/modernizr.custom.js"></script> <!-- Drag Drop File -->
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
	<script src="libraries/gmap/jquery.gmap.min.js"></script> <!-- map -->
	<script src="libraries/expanding-search/classie.js"></script>
	<script src="libraries/expanding-search/uisearch.js"></script>
	<!-- Customized Scripts -->
	<script src="js/functions.js"></script>
	<script id="imageTemplate" type="text/x-jquery-tmpl">
		<div class="col-md-3 col-sm-3 col-xs-6">
												<div class="imageholder">
														<figure>
																<img src="${filePath}" alt="${fileName}"/>
														</figure>
												</div>
										</div>
									</script>
	<script type="text/javascript" src="js/simi.js?verson=1"></script>
	<script type="text/javascript">
		buscarDestacados(6);
	</script>
</body>

</html>