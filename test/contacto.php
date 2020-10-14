<?php
require("quick-contact.php");
   // generate a new token for the $_SESSION superglobal and put them in a hidden field
	$newToken = generateFormToken('form1');   

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

	<title>Rafael Angel | Contacto</title>

		

	<link rel="shortcut icon" href="images/favicon.png">

    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>

    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->

    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->

	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>

	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>

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

		<!-- contact-detail -->

		<div id="contact-detail" class="contact-detail">

			<div class="container">

				<!-- contact-address-section -->

				<div class="col-md-3 col-sm-6 col-xs-12">

					<div class="contact-logo-box">

						<img src="images/logo.png" alt="logo">						

					</div>	

					<div class="contact-address">

						<p>

							<i class="fa fa-map-marker"></i>

							<span> Av Cll 40A #13-09 Piso 4 Edificio UGI</span>

						</p>

						<!-- <p>

							<i class="fa fa-phone"></i>

							<span> Fijo</span>

						</p> -->

						<p>

							<i class="fa fa-mobile"></i>

							<span> +57 (1) 288-3388</span>

						</p>

						<p>

							<i class="fa fa-envelope-o"></i>

							<a title="mailto" href="mailto:john@propertyexpert.com">contacto@rafaelangel.com.co</a>

						</p>

					</div>

					<ul class="contact-social-icon">

						<!-- <li><a title="twitter" href="#"><i class="fa fa-twitter"></i></a></li> -->

						<li><a title="facebook" target="_blank" href="https://www.facebook.com/Rafael-Angel-H-C%C3%ADa-SAS-508867225936096/"><i class="fa fa-facebook"></i></a></li>

						<!-- <li><a title="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li> -->

						<!-- <li><a title="linkedin-square" href="#"><i class="fa fa-linkedin-square"></i></a></li> -->

						<!-- <li><a title="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li> -->

						<!-- <li><a title="instagram" href="#"><i class="fa fa-instagram"></i></a></li> -->

					</ul>

				</div><!---contact-address-section/- -->

				<!-- contact-feedback-form-section -->

				<div class="col-md-9 col-sm-6 col-xs-12">

					<div class="contact-feedback-form">

						<h3>Envianos un Mensaje</h3>

						<form id="contact">
							<input type="hidden" name="token" value="<?php echo $newToken; ?>">
							<input type="hidden" name="origin" value="1">
							
							<div class="col-md-12 col-xs-12">
								
									<input type="text" class="form-control" id="input_name" name="contact-name" placeholder="Nombre" 	required />
								
							</div>

							

							<div class="col-md-6 col-xs-12">
								
								

									<input type="number" class="form-control" id="input_phone" name="contact-phone" placeholder="Telefono" required />

							

							</div>


							

							<div class="col-md-6 col-xs-12">

							

								<input type="email" class="form-control" id="input_email" name="contact-email" placeholder="Correo" required />

								

							</div>

							
			
							<div class="col-md-12 col-xs-12">

							

									<textarea rows="3" class="form-control" id="textarea_message" name="contact-message" placeholder="Mensaje"></textarea>

								

							</div>

							<div class="col-md-12 col-xs-12">

								<input type="submit" id="btn_smtContact" value="Enviar">

							</div>

							<div class="col-md-12 col-sm-12">

								<div id="alert-msg" class="alert-msg"></div>

							</div>

						</form>

					</div>						

				</div><!-- contact-feedback /- -->

			</div><!-- container /- -->

		</div><!-- contact-detail /- -->

		<!-- contact-address-group-section/- -->

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

	<script>
		$(function(){

			$(document).on("submit","#contact",function(e){
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