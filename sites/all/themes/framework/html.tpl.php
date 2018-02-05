<?php 
global $base_url;
$base_theme=path_to_theme();
?>
<!DOCTYPE html>
<html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
  <head>

	<?php print $head; ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93993711-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url?>/css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url?>/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url?>//css/estilos.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="<?php echo $base_url?>/scripts/owl.carousel.js"></script>
	<script src="<?php echo $base_url?>/scripts/mi.js"></script>

	<!-- livereload -->
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<!-- livereload -->

	<!-- Adsense -->
		
		<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		  google_ad_client: "ca-pub-4733150240823723",
		  enable_page_level_ads: true
		});
		</script>
	<!-- DFP -->
		<!-- <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
		<script>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		</script>

		<script>
		googletag.cmd.push(function() {
		  googletag.defineSlot('/88138160/300x_600_1', [300, 600], 'div-gpt-ad-1491154382753-0').addService(googletag.pubads());
		  googletag.defineSlot('/88138160/300x250_1', [300, 250], 'div-gpt-ad-1491154433856-0').addService(googletag.pubads());

		  googletag.pubads().enableSingleRequest();
		  googletag.enableServices();
		});
		</script>  -->
	<!--  -->
	<meta name="robots" content="index">
	<meta name="description" content="Toque Sports te informa de las noticias deportivas más relevantes del momento con contenido entretenido mediante fotos, videos, encuestas y trivias.">	
	<meta name="keywords" content="LeBron James‬, ‪Cleveland Cavaliers‬, ‪Golden State Warriors‬, ‪NBA‬, ‪Kevin Durant‬, ‪Kyrie Irving‬‬, Boyacá Chicó‬, ‪Real Santander‬, ‪Categoría Primera B‬, ‪Tunja‬, ‪Floridablanca‬‬, ‪‪Tour de Eslovaquia‬, ‪Jan Tratnik‬, ‪Egan Bernal‬, ‪Manzana Postobón Team‬, ‪Colombia‬, ‪Matej Mugerli‬, ‪CCC Sprandi Polkowice‬, ‪Sergio Higuita‬, Selección de fútbol de Chile‬, ‪Claudio Bravo‬, ‪Copa FIFA Confederaciones‬, ‪Juan Antonio Pizzi‬, ‪Rumania‬, ‪Arturo Vidal‬, ‪Chile‬, ‪Marcelo Díaz, Selección de fútbol de Argentina‬, ‪Copa Mundial de Fútbol‬, ‪Argentina‬‬, Vuelta a Suiza‬, ‪Michael Matthews‬, ‪Team Sunweb‬, ‪Peter Sagan‬, ‪John Degenkolb‬, ‪Tour de Francia, Atlético Junior‬, ‪Independiente Medellín‬, ‪Luis Tipton‬, ‪Jorge Enrique Arias‬, ‪Barranquilla‬‬, FIFA‬, ‪Electronic Arts‬, ‪Electronic Entertainment Expo‬, ‪EA Sports‬, ‪Cristiano Ronaldo‬, ‪PlayStation 4‬, Juan Guillermo Cuadrado‬, ‪Selección de fútbol de Colombia‬‬, Colombia, Fútbol, Deportes, Baloncesto, Beisbol, Tenis, NFL, MLB, NBA, Roland Garros, Diego Costa‬, ‪Chelsea FC, ‪‪Antoine Griezmann‬, ‪Club Atlético de Madrid‬‬, La Liga, Atleti, Griezmann, Ronaldo, CR7, Cristiano, Gran Premio de Canadá‬, ‪Fernando Alonso‬, ‪Lewis Hamilton‬, ‪Sebastian Vettel‬, ‪Daniel Ricciardo‬, ‪Kimi Räikkönen‬, ‪Daniil Kvyat‬, ‪Romain Grosjean, Lionel Messi, Messi, Barcelona, FC Barcelona, España, Luis Advíncula‬, ‪Club de Fútbol Tigres de la Universidad Autónoma de Nuevo León‬, ‪Selección de fútbol de Perú‬, ‪México‬‬, Grandes Ligas de Béisbol‬, ‪Cincinnati Reds‬, ‪Liga Americana‬, ‪New York Yankees‬‬, Club de Fútbol Monterrey‬, ‪Avilés Hurtado‬, ‪Monterrey‬, ‪Club Tijuana‬, ‪Antonio Mohamed‬‬, Hugo Lloris‬, ‪Suecia‬, ‪Selección de fútbol de Francia‬, ‪YouTube‬, ‪Didier Deschamps, Francia, Eliminatorias Europeas, Rusia 2018, Mundial, Copa del Mundo, Eliminatorias Sudamericanas, CONMEBOL, CONCACAF, UEFA, Eliminatorias Conmebol, Eliminatorias Concacaf, Ligue 1, Serie A, Premier League, Fútbol Inglés, Fútbol Español, Fútbol Italiano, Primera División, Fútbol Argentino, Brasileirao, Fútbol Brasileño, Flamengo, Sao Paulo, Cruzeiro, Corinthians, Palmeiras, Botafogo, Chapecoense, New England Patriots‬, ‪NFL‬, ‪Tom Brady‬, ‪Dallas Cowboys‬, ‪Super Bowl LII‬, ‪Robert Kraft‬, ‪Atlanta Falcons‬‬, ‪‪Ronaldinho‬, ‪Fútbol Club Barcelona‬, ‪Hugh Hefner‬‬, Associazione Calcio Milan‬, ‪André Silva‬, ‪Fútbol Club Oporto‬, ‪Mateo Musacchio‬‬, AC Milan, Inter de Milan, Juventus, Parma, AS Roma, Udinese, Lazio, Palermo, Genoa, Sampdoria, Sassuolo, Atalanta, Marco Verratti‬, ‪Fútbol Club Barcelona‬, ‪París Saint-Germain Football Club‬‬, José Néstor Pékerman‬, ‪Selección de fútbol de Colombia‬, ‪Óscar Murillo‬, ‪Colombia‬, ‪Yerry Mina‬, ‪Wilmar Barrios‬‬, PSG, Boca Juniors, James Rodriguez, Radamel Falcao, Falcao, Chile, Uruguay, Paraguay, Peru, Bolivia, Venezuela, Ecuador, Costa Rica, Panamá, Goles, Cronica, Fichajes, Farid Díaz‬, ‪Club Olimpia‬, ‪Atlético Nacional‬, ‪Ever Hugo Almeida‬‬, Junior de Barranquilla, Santa Fe, Independiente Medellin, DIM, Fútbol Colombiano, Liga Aguila, América, América de Cali, Deportivo Cali, Millonarios, Antioquia‬, ‪Valle del Cauca‬, ‪Estadio Atanasio Girardot‬, ‪Río Cauca‬‬, River Plate, Independiente, Racing Club, Rosario Central, Teofilo Gutierrez, Real Madrid, Newells Old Boys, Estudiantes de La Plata, Nacional, Pachuca, Queretaro, Tigres, Rayados, Monterrey, Arsenal, Tottenham, Spurs, Andrés Iniesta, Juventus de Turín, Paris Saint Germain, Selección Colombia, Selección de fútbol de Colombia, Liga de Campeones de la UEFA, Gareth Bale, Arsenal Football Club, Real Madrid Club de Fútbol, Zinedine Zidane, Cristiano Ronaldo, Fútbol, Sergio Ramos, Independiente Santa Fe, Copa Libertadores de América, Manchester United Football Club, Deportivo Cali, Ronaldo, Fútbol Club Barcelona, Bayern de Múnich, Paris Saint Germain - PSG, Fútbol Club Oporto, Società Sportiva Calcio Napoli, Deportes, Colombia, Edinson Cavani, Once Caldas, Barranquilla, Iker Casillas, Champions League, Cartagena, Angel Di Maria, Borussia Dortmund, Neymar, Lionel Messi, Leicester City Football Club, Atlético Nacional, DIM, Manchester City Football Club, Luis Alberto Suárez, Independiente Medellín, Pep Guardiola, Paulo Dybala, Millonarios FC, James Rodríguez, Junior de Barranquilla, Club Atlético River Plate, Fútbol, Lionel Messi, Liga de Campeones de la UEFA, Arsenal Football Club, Cristiano Ronaldo, Real Madrid Club de Fútbol, Fútbol Club Barcelona, Manchester United Football Club, Bayern de Múnich, Deportes, Chelsea Football Club, Club Atlético Boca Juniors, Gianluigi Buffon, Junior de Barranquilla, Borussia Dortmund, Juventus de Turín, Champions League, Diego Armando Maradona, Neymar, Manchester City Football Club, Pelé, Lev Yashin, FIFA 18, FIFA 17, Sergio Agüero, Alexis Sánchez, Confederación Sudamericana de Fútbol, Radamel Falcao García, Cruz Azul Fútbol Club, Club Atlético River Plate, Fútbol, Liga de Campeones de la UEFA, Lionel Messi, Cristiano Ronaldo, Fútbol Club Barcelona, Deportes, Racing Club, Club Atlético Rosario Central, Sporting de Lisboa, Teófilo Gutiérrez, Futbol Argentino, Sport Lisboa e Benfica, Paulo Dybala, Luis Alberto Suárez, Estadio Metropolitano Roberto Meléndez, Copa Libertadores de América, Colombia, Barranquilla, Nairo Quintana, UCI, Giro de Italia, Balón de Oro, Fernando Gaviria, Ciclismo, Ayrton Senna, Floyd Mayweather, Conor McGregor, Julio Cesar Chaves, Mariana Pajon, Juegos Olímpicos, Champions League, Liga de Campeones, Categoría A, Europa League, The Best, Sebastian Telfair‬, ‪NBA‬, ‪Historia de la NBA‬, ‪Portland Trail Blazers‬, ‪Boston Celtics‬‬, Guillermo Ochoa‬, ‪Real Club Celta de Vigo‬, ‪Vigo‬, ‪LaLiga‬, ‪Granada Club de Fútbol‬, ‪España, Selección de fútbol de Camerún‬, ‪Copa FIFA Confederaciones‬, ‪Ambroise Oyongo‬, ‪Copa Africana de Naciones‬, ‪Chile‬, ‪Hugo Broos‬‬, Dom Solanke, Vinicius Jr, Mercado de pases, Roger Federer, Rafael Nadal, Nishikori, Pablo Cueva, Santiago Giraldo, Dominic Thiem, Novak Djokovic, Andre Agassi, Pibe Valderrama, Juniorista, Toque Sports, Toque Juniorista, Actual Fútbol, Noticias Fútbol, Noticias Deportes" />

	<?php print $scripts; ?>
  </head>

  <body class="<?php print $classes; ?>" <?php // print $attributes;?>>


	
	

	<?php print $page_top; ?>
	
	<?php print $page; ?>
	<?php print $page_bottom; ?>

	<?php
	if(isset($node)){?>
	  
	  <?php
	}?>
	
  </body>

</html>