// buscarGestion();

buscarTipoInmueble();

// buscarDepartamento();

buscarCiudad(25);

buscarDestacadosAside(3);

markers = []; 



function consumirAjax(data,callback,url){

    $.ajax({

		url: 'https://www.simi-api.com/ApiSimiweb/response/'+url,

		type: 'GET',

		beforeSend: function (xhr) {

			xhr.setRequestHeader(

			  'Authorization',

			  'Basic ' + btoa('Authorization:O8xsMoiwzTxgswHar2LHDrGJn0aGAf3ABSh6fGhz-259'));

			 },

			'dataType': "html",

		success:function(data)

			{

				callback(JSON.parse(data));

			},

		error: function(xhr) { // if error occured

		        alert("Error occured.please try again");

		        $(placeholder).append(xhr.statusText + xhr.responseText);

		        $(placeholder).removeClass('loading');

		    },

		});

}



function buscarGestion(){

	var data = {};



    function callback(res){
        // $('#SelectCiudad').html("");
        // $('#SelectZona').html("");

    	var htmlOut = "<option value='0'>&#191;Que buscas&#63;</option>";
    	for (var i = 0; i < res.length; i++) {
			htmlOut += "<option value='"+res[i].idGestion+"' >"+res[i].Nombre+"</option>";
    	}
        $('#SelectGestion').html(htmlOut);
        // $('select').selectpicker('render');    

    }
    consumirAjax(data,callback,'gestion');
}

function buscarTipoInmueble(){

    var data = {};
    function callback(res){

    	var htmlOut = "<option value='0'>Tipo</option>";

    	for (var i = 0; i < res.length; i++) {

			htmlOut += "<option value='"+res[i].idTipoInm+"' >"+res[i].Nombre+"</option>";

    	}
        $('#SelectTipo').html(htmlOut);
    }
    consumirAjax(data,callback,'tipoInmuebles');
}

function buscarDepartamento(){

	var data = {};

    function callback(res){
    	var htmlOut = "<option value='0'>Departamento</option>";

    	if(typeof res == "object")	
    	for (var i = 0; i < res.length; i++) {
			htmlOut += "<option value='"+res[i].id+"' >"+res[i].nombre+"</option>";

    	}    	

        $('#SelectDepartamento').html(htmlOut);

        var $example = $("#SelectDepartamento").select2();

        $example.val("0").trigger("change");

        $('select[name=dept]').on('change', function(){

            var selected = $(this).find("option:selected").val();
            // alert(selected);
            buscarCiudad(selected);
        });
        // $('select').selectpicker('render');    
    }
    consumirAjax(data,callback,'v2/departamento');
}
function buscarCiudad(id){
	var data = {};

    function callback(res){

    	var htmlOut = "";    	

    	if(typeof res == "object")	

	    	for (var i = 0; i < res.length; i++) {

				htmlOut += "<option value='"+res[i].id+"' >"+res[i].nombre+"</option>";

	    	}



        $('#SelectCiudad').html(htmlOut);

        $('select[name=ciudad]').on('change', function(){

            var selected = $(this).find("option:selected").val();

            // alert(selected);

            buscarZona(selected);

        });
        buscarZona(11001)

        // $('select').selectpicker('render');    

    }
    consumirAjax(data,callback,'v2/ciudad/idDepartamento/'+id);
}



function buscarZona(id){

    var data = {};
    var z = sessionStorage.getItem('z');
    function callback(res){
    	var htmlOut = "";    
    	if(typeof res == "object")	
    	for (var i = 0; i < res.length; i++) {
        if(z==res[i].id)
        {
          htmlOut += "<option value='"+res[i].id+"' selected >"+res[i].nombre+"</option>";
        }
        else
        {
          htmlOut += "<option value='"+res[i].id+"' >"+res[i].nombre+"</option>";
        }
			
    	}
        $('#SelectZona').html(htmlOut);
        // $('select').selectpicker('render');    
    }
    consumirAjax(data,callback,'v2/zonas/idCiudad/'+id);
}


function buscarDestacados(cantidad){

	var data = {};



	function callback(res){
    if(res.inmueble.length > 0){
  		var htmlOut = '<div id="featured-section" class="featured-section container-fluid p_z">'+
                      '<div class="container">'+
                        '<div class="section-header">'+
                          '<h3>Propiedades Destacadas</h3>'+
                        '</div>'+
                        '<div id="featured-property" class="featured-property">';

      	for (var i = 0; i < res.inmueble.length; i++) {

  			var propiedad = res.inmueble[i];
        var ciudad = (propiedad["ciudad"]=="" || propiedad["ciudad"]==undefined)?"Ciudad":propiedad["ciudad"];
  			htmlOut +=  '<div class="item">'+
                      '<div class="col-md-4 rent-block">'+
                        '<div class="property-main-box">'+
                          '<div class="property-images-box">'+
                            '<span>'+propiedad["Gestion"]+'</span>'+
                            '<a title="Property Image" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'"><img class="feature-img" src="'+propiedad["foto1"]+'" alt="featured" /></a>'+
                            '<h4>';
                            htmlOut += propiedad["Canon"]==0?propiedad["Venta"]:propiedad["Canon"];
                            htmlOut += '</h4>'+
                          '</div>'+
                          '<div class="clearfix"></div>'+
                          '<div class="property-details">'+
                            '<a title="Property Title" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'">'+ciudad+'</a>'+
                            '<ul>'+
                              '<li>Area: '+propiedad["AreaLote"]+' m<sup>2</sup></li>'+
                              '<br>'+
                              '<li>Tipo: '+propiedad["Tipo_Inmueble"]+'</li>'+
                              '<br>'+
                              '<li>Barrio: '+propiedad["Barrio"]+'</li>'+
                              '<br>'+
                              // '<li>Ciudad: '+propiedad["ciudad"]+' m<sup>2</sup></li>'+
                              // '<li><i><img src="images/icon/bed-icon.png" alt="bed-icon" /></i>3</li>'+
                              // '<li><i><img src="images/icon/bath-icon.png" alt="bath-icon" /></i>2</li>'+
                            '</ul>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>';
      	}

       htmlOut += '</div>'+
                '</div>'+
              '</div>';

       	$('#destacados').html(htmlOut);
      }
    }
    consumirAjax(data,callback,'inmueblesDestacados/limite/'+cantidad); 
}

function buscarDestacadosAside(cantidad){
  var data = {};

  function callback(res){
    if(res.inmueble.length > 0){
        var htmlOut = '<h2 class="widget-title">Propiedades<span>destacadas</span></h2>';
        for (var i = 0; i < res.inmueble.length; i++) {
        var propiedad = res.inmueble[i];
        htmlOut +=  '<div class="property-featured-inner">'+
                      '<div class="col-md-4 col-sm-3 col-xs-2 p_z">'+
                        '<a title="" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'"><img src="'+propiedad["foto1"]+'" alt="" /></a>'+
                      '</div>'+
                      '<div class="col-md-8 col-sm-9 col-xs-10 featured-content">'+
                        '<a title="" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'">'+propiedad["ciudad"]+'</a>'+
                        '<h3>';
                        htmlOut += propiedad["Canon"]==0?"&dollar;"+propiedad["Venta"]:"&dollar;"+propiedad["Canon"];
                        htmlOut += '</h3>'+
                      '</div>'+
                    '</div>';

        }
        $('#asideDestacados').html(htmlOut);
    }
    consumirAjax(data,callback,'inmueblesDestacados/limite/'+cantidad);
  }
}

function buscarPropiedadIndex(index){

  var g = jQuery('select[name=tip_ope]')[0].value == ""?0:jQuery('select[name=tip_ope]')[0].value;
  var tp = jQuery('select[name=tip_inm]')[0].value == ""?0:jQuery('select[name=tip_inm]')[0].value;
  var d = 0;
  var c = jQuery('select[name=ciudad]')[0].value == ""?0:jQuery('select[name=ciudad]')[0].value;
  var z = jQuery('select[name=zona]')[0].value == ""?0:jQuery('select[name=zona]')[0].value;
  // var z = 0;

  sessionStorage.setItem('g',g);
  sessionStorage.setItem('tp',tp);
  sessionStorage.setItem('d',d);
  sessionStorage.setItem('c',c);
  sessionStorage.setItem('p1',0);
  sessionStorage.setItem('p2',0);
  sessionStorage.setItem('a1',0);
  sessionStorage.setItem('a2',0);
  sessionStorage.setItem('z',z);
  sessionStorage.setItem('index',1);
  sessionStorage.setItem('form',1);

  location.href='Buscador';

}

function buscarPropiedadBuscador(index){

  var g = jQuery('select[name=tip_ope]')[0].value;
  var tp = jQuery('select[name=tip_inm]')[0].value;
  var d = 0;
  var c = jQuery('select[name=ciudad]')[0].value == ""?0:jQuery('select[name=ciudad]')[0].value;
  var z = jQuery('select[name=zona]')[0].value == ""?0:jQuery('select[name=zona]')[0].value;
  var area = 0;
 var precio = 0;
  $("#propiedades").html("");
  buscarPropiedades(1,9,d,c,z,0,tp,g,0,0,0,0,0,0,0,0,0);
}

function buscarPropiedades(limite,cantidad,departamento,ciudad,zona,barrio,tipoInm,tipOper,areamin,areamax,valmin,valmax,campo,order,banios,alcobas,garajes){
	var data = {};

	sessionStorage.setItem('g',tipOper);
	sessionStorage.setItem('tp',tipoInm);
	sessionStorage.setItem('d',departamento);
	sessionStorage.setItem('c',ciudad);
	sessionStorage.setItem('p1',valmin);
	sessionStorage.setItem('p2',valmax);
	sessionStorage.setItem('a1',areamin);
	sessionStorage.setItem('a2',areamax);
	sessionStorage.setItem('z',zona);
	sessionStorage.setItem('index',limite);

    function callback(res){
    	a = res;
    	console.log(res);
    	cargarBuscadorPropiedades(res);
    }

  var arrayPath = window.location.pathname.split("/");

  if(arrayPath[arrayPath.length-1] == "Buscador"){
    consumirAjax(data,callback,'v21/filtroInmueble/limite/'+limite+'/total/'+cantidad+'/departamento/'+departamento+'/ciudad/'+ciudad+'/zona/'+zona+'/barrio/'+barrio+'/tipoInm/'+tipoInm+'/tipOper/'+tipOper+'/areamin/'+areamin+'/areamax/'+areamax+'/valmin/'+valmin+'/valmax/'+valmax+'/campo/'+campo+'/order/'+order+'/banios/'+banios+'/alcobas/'+alcobas+'/garajes/'+garajes+'/');
  }
  else{
    sessionStorage.setItem('index',1);
    sessionStorage.setItem('form',1);
    location.href='Buscador';
  }
}

function cargarBuscadorPropiedades(res){

  console.log(res[5].foto1);
  console.log("res");

    for (var i = 0; i < markers.length; i++) {

      markers[i].setMap(null);

    }

    markers = [];

    var htmlOut = $("#propiedades").html();

    if (res.totalPagina > 0 && res.totalInmuebles > 0)

    {

      var cantidad = res.totalPagina > res.totalInmuebles?res.totalInmuebles:res.totalPagina;

    	$("#cantidadinmuebles").html(cantidad);

      var infowindow = new google.maps.InfoWindow();

    	for (var i = 0; i < cantidad; i++) {

    		var propiedad = res[i];

        if(i % 3 == 0){

          htmlOut += '<div class="property-listing-row row">';

        }
        htmlOut +='<div class="col-md-4 col-sm-12 rent-block">'+
                    '<div class="property-main-box">'+
                      '<div class="property-images-box" style="text-align: center;">'+
                        '<span>'+propiedad["Gestion"]+'</span>'+
                        '<a title="Property Image" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'"><img style="height: 200px;" src="'+propiedad["foto1"]+'" alt="" /></a>'+
                        '<h4>&dollar;';
                        htmlOut += propiedad["Canon"]==0?propiedad["Venta"]:propiedad["Canon"];
                        htmlOut += '</h4>'+
                      '</div>'+
                      '<div class="clearfix"></div>'+
                      '<div class="property-details">'+
                        '<a title="Property Title" href="detalles.php?id='+propiedad["Codigo_Inmueble"]+'">'+propiedad["Barrio"]+' - '+propiedad["Ciudad"]+'</a>'+
                        '<ul>'+
                          '<li><i class="fa fa-expand"></i>'+propiedad["AreaConstruida"]+' m<sup>2</sup></li>'+
                          '<li><i><img src="images/icon/bed-icon.png" alt="bed-icon" /></i>'+propiedad["Alcobas"]+'</li>'+
                        '</ul>'+
                      '</div>'+
                    '</div>'+
                  '</div>';

          if(i % 3 == 2){

            htmlOut += '</div>';

          }

          var pos = {lat: parseFloat(propiedad['latitud']), lng: parseFloat(propiedad['longitud'])};
          var marker = new google.maps.Marker({
            position: pos,
            map: map,
          });

          markers.push(marker);

          var contentString = '<div>  <h5 style="margin: 0 0 0 0; "> '+propiedad["Tipo_Inmueble"]+' en '+propiedad["Gestion"]+'</h5>  <img src="'+propiedad["foto1"]+'" width=100><div> $';
          contentString += propiedad["Canon"]==0?propiedad["Venta"]:propiedad["Canon"];
          contentString +="<div><a href='detalles.php?id="+propiedad["Codigo_Inmueble"]+"' target='_blank'>Ver Más</a></div>";
          contentString += '</div>'
          /*marker.addListener('click', function() {
            infowindow.open(map, marker);
          });*/

          google.maps.event.addListener(marker,'click', (function(marker,contentString,infowindow){ 
              return function() {
                 infowindow.setContent(contentString);
                 infowindow.open(map,marker);
              };
          })(marker,contentString,infowindow)); 
    	}

    	$("#masprop").show();
      $("#NoProp").hide();
    }
    else
    {
        var limite = sessionStorage.getItem('index');

        if(limite == 1){
          htmlOut = '<div class="alert alert-success">No se encontraron propiedades</div>';  
        }
        else{
          $("#NoProp").show();
        }
        $("#masprop").hide();
    }
    $("#propiedades").html(htmlOut);
}

function masPropiedades(){

  var $btnMore = $('.js-properties-more');

  $btnMore.addClass('button--loading');

  setTimeout(function () {

    // var $demoItems = $list.find('.listing__item:lt(10)').clone();

    // $list.append($demoItems);

      var g = sessionStorage.getItem('g');
      var tp = sessionStorage.getItem('tp');
      var d = sessionStorage.getItem('d');
      var c = sessionStorage.getItem('c');
      var z = sessionStorage.getItem('z');
      var p1 = sessionStorage.getItem('p1');
      var p2 = sessionStorage.getItem('p2');
      var a1 = sessionStorage.getItem('a1');
      var a2 = sessionStorage.getItem('a2');
      var index = parseInt(sessionStorage.getItem('index'));

      buscarPropiedades(index+1,9,d,c,z,0,tp,g,a1,a2,p1,p2,0,0,0,0,0);
    $btnMore.removeClass('button--loading');        
  }, 3500);
}

function cargarInmueble(id){

  var data = {};

  function callback(res){
    a = res;

    console.log(res);
    cargarDetalleInmueble(res);
  }
  consumirAjax(data,callback,'v2/inmueble/codInmueble/'+id);
}

function cargarDetalleInmueble(res){
  console.log(res);
  var htmlImagenes = '<div class="carousel-inner" role="listbox">';
  for (var i = 0; i < res.fotos.length; i++) {
    if(i == 0)
      htmlImagenes +=  '<div class="item active" style="max-height:500px; background-size: cover;">';
    else
      htmlImagenes +=  '<div class="item" style="max-height : 500px; background-size: cover;">';
        htmlImagenes +=  '<img src="'+res.fotos[i].foto+'" alt="Slide" style="min-height:500px; max-height:500px; background-size: cover;">'+
                       '<span class="marcaagua marcaagua-detalle" style="padding-right: 15px; top: 75% !important; width: 300px;  opacity:0.7; position: absolute; bottom: 8px; right: 8px;"><img src="images/marca_de_agua.png"></span></div>';
  }
    htmlImagenes +=   '</div>'+
                      '<a class="left carousel-control" href="#property-detail1-slider" role="button" data-slide="prev">'+
                        '<span class="fas fa-arrow-alt-circle-left" aria-hidden="true"></span>'+
                        '<span class="sr-only">Previous</span>'+
                      '</a>'+
                      '<a class="right carousel-control" href="#property-detail1-slider" role="button" data-slide="next">'+
                        '<span class="fas fa-arrow-alt-circle-right" aria-hidden="true"></span>'+
                        '<span class="sr-only">Next</span>'+
                      '</a>';

  $("#property-detail1-slider").html(htmlImagenes);

  if(res.IdGestion == 1){
    var value = res.ValorCanon
  }else{
    if(res.IdGestion == 5){
      var value = res.ValorVenta
    } 
  }
console.log("llego: "+res.IdGestion);

  

  // var htmlheader ='<table class="table">'+
  //                   '<tr>'+
  //                   '<th>Titulo</th>'+'<td>prueba</td>'+
  //                   '</tr>'+
  //                 '</table>';

//res.ciudad

  var htmlheader ='<h3 style="color:#0b2b5a;">ATRIBUTOS DE PROPIEDAD</h3>'+
                  '<div class="row">'+
                      '<div class="col-md-4 col-sm-4 col-xs-12">'+
                        '<div class="tl-adiltional-box">'+
                          '<h4>'+
                            '<i class="fa fa-usd" aria-hidden="true"></i>'+
                            ' Precio: '+res.precio+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>'+
                            'Ciudad: '+res.ciudad+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>Alcobas:'+res.alcobas+''+
                          '</h4>'+
                        '</div>'+
                      '</div>'+

                      '<div class="col-md-4 col-sm-4 col-xs-12">'+
                        '<div class="tl-adiltional-box">'+
                          '<h4>'+
                            '<i class="fa fa-bullseye" aria-hidden="true"></i>'+
                            'Gestion:'+res.oper+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>'+
                            'Localidad:'+res.localidad+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>Baños:'+res.banos+''+
                          '</h4>'+
                        '</div>'+
                      '</div>'+

                      '<div class="col-md-4 col-sm-4 col-xs-12">'+
                        '<div class="tl-adiltional-box">'+
                          '<h4>'+
                            '<i class="fa fa-home" aria-hidden="true"></i>'+
                            'Tipo: '+res.Tipo_Inmueble+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>'+
                            'Barrio:'+res.barrio+''+
                          '</h4>'+
                          '<h4>'+
                            '<i class="fa fa-map-marker" aria-hidden="true"></i>'+
                            'Area: '+res.AreaConstruida+'mts²'+
                          '</h4>'+
                        '</div>'+
                      '</div>'+

                      '<h3 style="color:#0b2b5a;">DESCRIPCIÓN</h3>'+
                        '<p>'+res.descripcionlarga+'</p>'+
                      
                      '<h3 style="color:#0b2b5a;">CARACTERISTICAS</h3>'+
                      '<table class="table"> <td>'+
                      '<h5 style="color:#0b2b5a;">Internas</h5>';

                      if(res.caracteristicasInternas.length > 0){
                        res.caracteristicasInternas.forEach(function(value){
                          var cantidad = (value["cantidad"]>1)? value["cantidad"]+' ':'';
                        


                          console.log(value["Descripcion"]);
                          htmlheader +='<li>'+value["Descripcion"]+'</li>';
                        

                        });

                      }
          htmlheader +='</td>';
          htmlheader +='<td>'+
                       '<h5 style="color:#0b2b5a;">Externas</h5>';
                      if(res.caracteristicasExternas.length > 0){
                        res.caracteristicasExternas.forEach(function(value){
                          var cantidad = (value["cantidad"]>1)? value["cantidad"]+' ':'';
                        


                          console.log(value["Descripcion"]);
                          htmlheader +='<li>'+value["Descripcion"]+'</li>';
                        

                        });

                      }
          htmlheader +='</td>';
          htmlheader +='<td>'+
                      '<h5 style="color:#0b2b5a;">Alrededores</h5>';
                      if(res.caracteristicasAlrededores.length > 0){
                        res.caracteristicasAlrededores.forEach(function(value){
                          var cantidad = (value["cantidad"]>1)? value["cantidad"]+' ':'';
                        


                          console.log(value["Descripcion"]);
                          htmlheader +='<li>'+value["Descripcion"]+'</li>';
                        

                        });

                      }
          htmlheader +='</td>';          
          htmlheader +='</table>'+
                       '</div>';



  $("#dph").html(htmlheader);                    



  //$("#dpd").html("<p>"+res.descripcionlarga+"</p>");    



  $("#gmap").gMap({

      controls: false,

      scrollwheel: true,

      

      markers: [

        {

          latitude: res.latitud,

          longitude: res.longitud,

        }

      ],

      icon: {

        image: "images/map-marker.png", 

        iconsize: [26, 46],

        iconanchor: [12, 46]

      },

      latitude: res.latitud,

      longitude: res.longitud,

      zoom: 14

    });         



}



function masPropiedades(){

  var $btnMore = $('#MasProp');
  $btnMore.html("Buscando...");
  setTimeout(function () {
    // var $demoItems = $list.find('.listing__item:lt(10)').clone();
    // $list.append($demoItems);
      var g = sessionStorage.getItem('g');
      var tp = sessionStorage.getItem('tp');
      var d = sessionStorage.getItem('d');
      var c = sessionStorage.getItem('c');
      var z = sessionStorage.getItem('z');
      var p1 = sessionStorage.getItem('p1');
      var p2 = sessionStorage.getItem('p2');
      var a1 = sessionStorage.getItem('a1');
      var a2 = sessionStorage.getItem('a2');
      var index = parseInt(sessionStorage.getItem('index'));

      buscarPropiedades(index+1,9,d,c,z,0,tp,g,a1,a2,p1,p2,0,0,0,0,0);

    $btnMore.html("Mas");
  }, 3500);
}