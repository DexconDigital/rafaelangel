<?php



	if($_GET['tipo'] ==  'arriendo'){

		$title = "Arriendo";

		$image = "ArriendoCaracteristica.jpg";

		$servicio = "Arriende su inmueble (Caracter&iacute;sticas del servicio)";

		$contenido = "<p style='text-align:justify'> Nuestro servicio de administración de arriendos cubre todas las tareas que se
necesitan para que usted reciba una buena rentabilidad y pueda tener la
tranquilidad de que su patrimonio está respaldado por una gestión experta,
transparente y eficiente. Rafael Angel H &amp; Cía ha administrado más de 6.000
propiedades en Bogotá y cuenta con un equipo comercial y administrativo
consolidado a lo largo de los años, para atender una amplia cartera de
propiedades que cientos de clientes nos confían todos los días. </p>



			<p>Al arrendar su inmueble con Rafael Angel tendr&aacute; nuestra garant&iacute;a en las siguientes tareas:

			<ul>

				<li style='text-align:justify'>Un estudio de precio que busca la mejor rentabilidad de su capital, junto con una gesti&oacute;n comercial enfocada en que se consiga un cliente en un tiempo menor a los promedios del mercado.

				</li>

				<li style='text-align:justify'>Un estudio de precio que busca la mejor rentabilidad de su capital.

				</li>

				<li style='text-align:justify'>Una gestión comercial enfocada en conseguir un cliente en un tiempo menor a los
promedios del mercado.

				</li>

				<li style='text-align:justify'>Un programa estructurado para promocionar su inmueble en medios virtuales e impresos, junto con el esfuerzo por encontrar la mejor opción de negocio a través de los clientes que día a día nos buscan para que los ayudemos a conseguir una propiedad.

				</li>

				<li style='text-align:justify'>Un análisis de los posibles clientes de su inmueble para asegurar su solvencia económica y la transparencia de sus actividades.

				</li>

				<li style='text-align:justify' >Nos encargamos de todos los tr&aacute;mites necesarios para que el contrato de arriendo de su inmueble quede asegurado hasta por 36 meses.

				</li>

				<li style='text-align:justify'>La elaboración de los contratos de arriendo que se necesiten, buscando garantizar la rentabilidad y el bienestar de su patrimonio.

				</li>

				<li style='text-align:justify'>Mes a mes recaudamos y facturamos los cánones de arriendo y las cuotas de administración de su propiedad.


				</li>
				
				<li style='text-align:justify'>Nos encargamos de todos los trámites necesarios para que el contrato de arriendo de su inmueble quede asegurado hasta por 36 meses.
				
				</li>
				
				<li style='text-align:justify'>Estamos al frente de toda la gestión de cobranza, y aún de la restitución de su inmueble en caso de ser necesario.
				</li>
				
				<li style='text-align:justify'>Atendemos todos los requerimientos de mantenimiento que puedan ser necesarios para su inmueble, y velamos por la integridad física de este durante el tiempo en que esté arrendado.
				</li>
				
				
				

			</ul>

			</p>";

	}

	else if($_GET['tipo'] ==  'venta'){

		$title = "Venda";

		$image = "VentaCaracteristica.jpg";

		$servicio = "Venda su inmueble (Caracter&iacute;sticas del servicio)";

		$contenido = "<p style='text-align:justify'> Rafael Angel H. y Cía. comercializa inmuebles en venta, aportando su experiencia de más de 65 años a cada negocio que lidera. Nuestra empresa ofrece seguridad jurídica a todas las partes involucradas y garantiza un manejo eficiente del precio y un proceso estructurado de promoción para cada propiedad. </p>



			<p>Al vender su inmueble con Rafael Angel tendr&aacute; nuestra garant&iacute;a en las siguientes tareas:

			<ul>

				<li style='text-align:justify'>Un estudio del precio de venta, que analiza las condiciones del mercado de la mano de las características específicas de cada inmueble, para lograr la mejor liquidez de su patrimonio en un tiempo razonable.

				</li>

				<li style='text-align:justify'>Un programa estructurado para promocionar su inmueble en medios virtuales e impresos, junto con el esfuerzo por encontrar la mejor opción de negocio a través de los clientes que día a día nos buscan para que los ayudemos a conseguir una propiedad.

				</li>

				<li style='text-align:justify'>En caso de que el comprador interesado en el inmueble requiera un crédito hipotecario, acompañamos la aprobación del préstamo para agilizar el trámite.

				</li>

				<li style='text-align:justify'>Revisamos la tradición jurídica de su inmueble y ayudamos a corregir cualquier anomalía o incongruencia que pueda entorpecer el proceso de venta.

				</li>

				<li style='text-align:justify'>Atendemos todos los requerimientos de mantenimiento que puedan ser necesarios para su inmueble antes de la venta.

				</li>

				<li style='text-align:justify'>Entregamos informes de la gestión comercial realizada de parte nuestra, para hacer seguimiento a la demanda de su inmueble y considerar posibles mejoras que se puedan implementar en el proceso de promoción.

				</li>

			</ul>

			</p>";

	}

	else{

		echo 'error';

	}











?>

<!doctype html>

<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->

<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->

<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->

<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--><html class=""> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">	

	<title>Rafael Angel | <?php echo $title; ?></title>

		

	<link rel="shortcut icon" href="images/favicon.png">

    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>

    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->

    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->

	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>

	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>

	<link rel="stylesheet" href="css/whatsapp.css">

	<link href="libraries/checkbox/minimal.css" rel="stylesheet"/>

	<link href="libraries/drag-drop/drag-drop.css" rel="stylesheet"/>

    <link href="css/components.css" rel="stylesheet"/>

	<link href="style.css" rel="stylesheet"/>

	<!--link href="submit-property.css" rel="stylesheet"/-->

    <link href="css/media.css" rel="stylesheet"/>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="js/html5/html5shiv.min.js"></script>

      <script src="js/html5/respond.min.js"></script>

    <![endif]-->



	<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    

</head>

<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">

	

	<?php include "cargar.php"; ?>



	<?php include "header.php"; ?>



	<!-- Page Content -->

	<div class="page-content">

		<!-- container -->

		<div class="container">

			<!-- container fluid -->

			<div class="container-fluid p_z">

				<!-- col-md-9 -->

				<div class="col-md-12 col-sm-12 p_l_z content-area">

					<div class="blog-listing single-post col-md-12 p_z">

						<article>

							<div class="entry-cover">

								<img src="images/dropbox/<?php echo $image; ?>" alt="blog" />

								<!-- <i class="fa fa-image"></i> -->

							</div>

							<div class="entry-header">

								<h3 class="entry-title"><?php echo $servicio; ?></h3>

							</div>

							<div class="entry-content">

								<?php echo $contenido; ?>

							</div>

						</article>

					</div>

				</div><!-- col-md-9 /- -->

				<div class="col-md-4 col-sm-6 p_r_z property-sidebar widget-area">

					<?php include 'aside.php' ?>

				</div>

			</div><!-- container fluid /- -->

		</div><!-- container /- -->

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

</body>

</html>