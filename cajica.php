<?php
require("quick-contact.php");
   // generate a new token for the $_SESSION superglobal and put them in a hidden field
	$newToken = generateFormToken('form5');   

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

	<title>Rafael Angel | Cajica</title>

		

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

								<img src="images/dropbox/cajica.jpg" alt="blog" />

								<!-- <i class="fa fa-image"></i> -->

							</div>

							<div class="entry-header">

							  <h3 class="entry-title">Ahora atendemos tambi&eacute;n toda el &aacute;rea de Sabana Centro</h3>

							  <p style="text-align: justify;">Rafael Angel H. y Cía. abrió una oficina en Cajicá para ofrecer su bagaje y su experticia como profesional de finca raíz en una de las zonas de mayor crecimiento del país. Tenemos asesores comerciales que desde Cajicá cubren negocios en toda el área de Sabana Centro: manejamos inmuebles para venta y arriendo desde Cota hasta Cajicá, y desde Tenjo hasta Sopó.</p>
								<p style="text-align: justify;"> ¡Acérquese a nuestras oficinas, o llámenos para agendar una cita! Negocios inmobiliarios en la Sabana y eficiencia con toda propiedad, de la mano de uno los mejores expertos en finca raíz de Bogotá!</p>

							</div>

						</article>

						<!-- Comment Area -->

						<div class="comments-area">

							<div class="comment-respond" id="respond">

								<p>Compártanos sus datos y nos pondremos en contacto para aclarar cualquier duda y apoyarlo en todo lo que requiera para hacer un buen negocio.</p>

								<form class="comment-form" id="commentform" method="post" action="#">

									<input type="hidden" name="token" value="<?php echo $newToken; ?>">
									<input type="hidden" name="origin" value="5">

									<div class="col-md-12">

										<label>Nombre</label>

										<input type="text" name="author" class="comments-line" id="input_name">

									</div>

									<div class="col-md-12">

										<label>Telefono</label>

										<input type="text" name="phone" class="comments-line" id="input_phone">

									</div>

									<div class="col-md-12">

										<label>Correo</label>

										<input type="text" name="email" class="comments-line" id="input_email">

									</div>

									<div class="col-md-12">

										<label>Direccion del Inmueble</label>

										<input type="text" name="address" class="comments-line" id="input_address">

									</div>

									<div class="col-md-12">



										<label>Barrio del Inmueble</label>



										<input type="text" name="street" class="comments-line" id="street">



									</div>

									

									<div class="col-md-12">

										<label>¿Est&aacute; buscando un aval&uacute;o? O ¿necesita un estudio m&aacute;s amplio? Por favor cu&eacute;ntenos brevemente c&oacute;mo podemos apoyarlo a trav&eacute;s de nuestros estudios inmobiliarios:</label>								

										<textarea name="comment" class="comments-area" id="input_comment"></textarea>

									</div>

									<div class="col-md-12">

										<input type="submit" value="Enviar" id="btn_smtContact">

									</div>

									<div class="col-md-12 col-sm-12">

										<div id="alert-msg" class="alert-msg"></div>

									</div>

								</form>

							</div>

						</div>

						<!-- Comment Area /- -->

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

	<script type="text/javascript" src="js/simi.js"></script>

	<script>
		$(function(){

			$(document).on("submit","#commentform",function(e){
				e.preventDefault();

				var mydata = $(this).closest("form").serialize();

				$.ajax({

					type: "POST",

					dataType: "json",

					url: "quick-contact.php",

					data: mydata,

					success: function(data) {

						

						if( data["type"] == "error" ){

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

							$("#input_address").val("");

							$("#street").val("");
							


							$("#input_comment").val("");

							

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