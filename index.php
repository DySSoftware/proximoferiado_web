<HTML>	
	<head>
		<title>Proximo Feriado</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/miCss.css" media="screen" />
		<script  type="text/javascript" src="js/jquery.js"></script>
		<script  type="text/javascript" src="js/bootstrap.min.js"></script>	
		<script  type="text/javascript" src="js/javascript.js"></script>
		<script type="text/javascript" src="js/proximo.js"></script>
		<script type='text/javascript' src='js/loadIMG.js'></script>
		<script>

		window.onload = function() {
					$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});
			//$(".se-pre-con").fadeOut("slow");
			$.getJSON('actual.json', {format: "json"}, function(data) {  
				var jsonFinal = [];
				for(var i = 0; i < data.length; i++){
					var d = new Date();
					var diaObjeto = data[i].dia;
					var mesObjeto = data[i].mes;
					var diaSistema = d.getDay();
					var mesSistema = d.getMonth()+1;
					
					if(mesObjeto >= mesSistema){
						if (diaObjeto >= diaSistema){
							jsonFinal.push(data[i]);
						}
					}
						
				}
				for (var i = 0; i <jsonFinal.length; i++){
					var dias = jsonFinal[i].dia;
					var mes = jsonFinal[i].mes;
					var ano = 2016;
					var fecha = ano+"/"+mes+"/"+dias;
					var fechasistema = new Date();
					var fechaProxima = new Date(fecha);
					var dif = fechaProxima-fechasistema;
					var diaactual = fechasistema.getDate();
					var mostrar = (Math.floor(dif / (1000 * 60 * 60 * 24)))+1; 
					var motivo = jsonFinal[i].motivo;
					
					if (dias==diaactual) {
						var nuevoDiv=$("<div class=\"item active  slide1\">"+
								   "<div class=\"carousel-caption\">"+
								   "<h1 id =\"faltan\">HOY</h1>"+
							       "<h1 class=\"dias\" id=\"cant-dias\">ES FERIADO</h1>"+
						           "<div class=\"seccion\">"+
							       "<h2 id =\"diasp\" class=\"diaspara\">POR</h2>"+
							       "<p class=\"desc\"id = \"descripcion\">"+motivo+"</p>"+
									"</div>"+
									"</div>"+
									"</div>");
						$(".carousel-inner").append(nuevoDiv);						
					}else if ((mostrar == 1 )&&dias!=diaactual ) {
						mostrar = mostrar + " dia";
						var item = "item";
							if (i == 0){
								item = "item active";
							}
						var texto="<div class=\""+item+" slide1\">"+
								   "<div class=\"carousel-caption\">"+
								   "<h1 id =\"faltan\">FALTAN</h1>"+
							       "<h1 class=\"dias\" id=\"cant-dias\">"+mostrar+"</h1>"+
								   "<h1 class=\"desc\" id=\"horas\">y horas :)</h1>"+
						           "<div class=\"seccion\">"+
							       "<h2 id =\"diasp\" class=\"diaspara\">PARA</h2>"+
							       "<p class=\"desc\"id = \"descripcion\">"+motivo+"</p>"+
									"</div>"+
									"</div>"+
									"</div>";
						$(".carousel-inner").append(texto);
						}else{
							var item = "item";
							if (i == 0){
								item = "item active";
							}
							var texto = "<div class=\""+item+" slide1\">"+
									
										"<div class=\"carousel-caption\">"+
											   "<h1 id =\"faltan\">FALTAN</h1>"+
											   "<h1 class=\"dias\" id=\"cant-dias\">"+mostrar+"</h1>"+
													   "<div class=\"seccion\">"+
													   "<h2 id =\"diasp\" class=\"diaspara\">DIAS PARA</h2>"+
													   "<p class=\"desc\"id = \"descripcion\">"+motivo+"</p>"+
												"</div>"+
										"</div>"+
									"</div>";
							$(".carousel-inner").append(texto);
						}
						if (i == 0){
							$(".carousel-indicators").append("<li data-target=\"#feriados\" data-slide-to=\"0\" class=\"active\"></li>");
						}else{
							$(".carousel-indicators").append("<li data-target=\"#feriados\" data-slide-to=\""+i+"\"></li>");
						}
				};
				
			});
		}
		</script>
	</head>
	<body>
		<div id="feriados" class="carousel slide" data-ride="carousel" data-interval="false">
		<div id="feriados" class="carousel slide" data-ride="carousel" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		</ol>
		 
		<!-- Wrapper for slides -->
		<div id="slide"class="carousel-inner">
				
		</div>
		 
		<!-- Controls -->
		<a class="left carousel-control" href="#feriados" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#feriados" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
		</div> 	
		</div>	
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- proximo_feriado_arg_adaptable -->
				<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-0665350568113246"
				 data-ad-slot="1998616279"
				 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>	
		<div class="modal"><!-- Place at bottom of page --></div>
	</body>
</HTML>
