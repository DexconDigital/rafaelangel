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
	<title>Rafael Angel | Buscador</title>
		
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
		
		<div class="row">
			<div class="col-md-12">
				<div id="contacts_map"></div>
			</div>
		</div>
		<!-- Property Listing Section -->
		<div id="property-listing" class="property-listing">
			<div class="container" style="margin-top: 30px;">
				<div class="property-left col-md-8 col-sm-6 p_l_z content-area">
					<div class="section-header p_l_z">
						<div class="col-md-10 col-sm-10 p_l_z">
							<p>Buscador</p>
						</div>
					</div>
					
					<div class="property-listing-row row" id="propiedades">

					</div>			
					<div class="separator"></div>
					<!-- Pagination -->
					<div class="listing-pagination">
						<ul class="pagination">
							<li class="active"><a id="MasProp" style="width: 150px;" title="search" onclick="masPropiedades()" class="btn">Mas</a></li>
						</ul>
					</div><!-- Pagination /- -->
				</div>
				<div class="col-md-4 col-sm-6 p_r_z property-sidebar widget-area">
					<?php include 'aside.php' ?>
				</div>
			</div>
		</div><!-- Property Listing Section /- -->
		
		<!-- Partner Section -->
		<div id="partner-section" class="partner-section">
			<div class="container">
				<div id="business-partner" class="business-partner">
					<div class="item"><a title="" href="#"><img src="images/aa-listing/1.png" style="margin: 40px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/2.png" style="margin: 40px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/3.jpg" style="margin: 60px 0px" alt=""></a></div>
					<div class="item"><a title="" href="#"><img src="images/aa-listing/4.jpg" style="margin: 63px 0px" alt=""></a></div>
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
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAlXyIM8zL7negVqIAb-WeuOuFQJ5vjDXo" type="text/javascript"></script>
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
	<script src="js/mapa.js"></script>
	<script type="text/javascript" src="js/simi.js"></script>
	<script type="text/javascript">

        jQuery(window).load(function(){
            var f = sessionStorage.getItem('form');
            if(f != undefined)
            {
                var g = sessionStorage.getItem('g');
                var tp = sessionStorage.getItem('tp');
                var d = sessionStorage.getItem('d');
                var c = sessionStorage.getItem('c');
                var z = sessionStorage.getItem('z');
                var p1 = sessionStorage.getItem('p1');
                var p2 = sessionStorage.getItem('p2');
                var a1 = sessionStorage.getItem('a1');
                var a2 = sessionStorage.getItem('a2');
                var index = 1;

                buscarPropiedades(index,9,d,c,z,0,tp,g,a1,a2,p1,p2,0,0,0,0,0);
            }
            else{
                buscarPropiedades(1,9,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
            }

            function luegoBuscar(res){
                cargarBuscadorPropiedades(res,sessionStorage.getItem('index'));
            }
        })    

    </script>
</body>
</html>