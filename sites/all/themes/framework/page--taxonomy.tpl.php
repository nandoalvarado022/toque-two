<?php include("header.tpl.php");?>

<?php
switch (arg(2)) {
	case 155:
		include "block--toque-tv.tpl.php";
	break;
	
	default:?>
		<div id="container" class="clearfix">
			<section id="main" role="main" class="clearfix">
				<h1>
					<figure class="icon">
					</figure>
					<?php echo $title?>
				</h1>
				<?php
					// echo "Hola mundo";
					if(isMobile()){
						print $view_content = views_embed_view("articulo", "block_6");
					} else{
						print $view_content = views_embed_view("articulo", "block_5");
					}
					
					// echo $_SERVER["REQUEST_URI"];?>
					<div class="sidebar_der">
						<!-- 300x250_1 -->
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<ins class="adsbygoogle"
							     style="display:inline-block;width:300px;height:250px"
							     data-ad-client="ca-pub-4733150240823723"
							     data-ad-slot="4064420291"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>

						<?php
						switch ($_SERVER["REQUEST_URI"]) {
							case '/actual-futbol':?>
								<h3>RECIENTES</h3>
								<?php
								$twHash="ActualFutbol";
								$nombreMostrar="ActualFutbol";
								$fbHash="ToqueSports";
									
								?>

								<a class="twitter-timeline" data-width="300" data-height="500" data-theme="dark" href="https://twitter.com/<?php echo $twHash?>">Tweets by <?php echo $nombreMostrar?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=980690795346065";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>

								<div class="fb-page" data-href="https://www.facebook.com/<?php echo $fbHash?>" data-tabs="timeline" data-width="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo $fbHash?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo $fbHash?>"><?php echo $nombreMostrar?></a></blockquote></div>
								<?php
							break;
							
							case '/futbol-colombiano':?>
								<iframe src="http://widgets.datafactory.la/es/colombia/posiciones.html#championship=colombia&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23F1F2F2&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23000000&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/toque-juniorista':?>
								<iframe src="http://widgets.datafactory.la/es/colombia/posiciones.html#championship=colombia&appIdTrack=11984&show-descentTable=1&team=81&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=0&show-AgainstGoals=0&show-WinGames=1&show-TieGames=1&show-LostGames=1&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-argentino':?>
								<iframe src="http://widgets.datafactory.la/es/primeraa/posiciones.html#championship=primeraa&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23FFFFFF&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23D1D3D4&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23030303&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-brasileno':?>
								<iframe src="http://widgets.datafactory.la/es/brasileirao/posiciones.html#championship=brasileirao&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=0&show-AgainstGoals=0&show-WinGames=1&show-TieGames=1&show-LostGames=1&show-Diff=1&show-DescentPlayedGames=0&show-DescentPoints=0&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-mexicano':?>
								<iframe src="http://widgets.datafactory.la/es/mexico/posiciones.html#championship=mexico&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/copa-libertadores':?>
								<iframe src="http://widgets.datafactory.la/es/libertadores/posiciones.html#championship=libertadores&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/copa-sudamericana':?>
								<iframe src="http://widgets.datafactory.la/es/sudamericana/posiciones.html#championship=sudamericana&appIdTrack=11984&show-descentTable=0&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/eliminatorias-sudamericanas':?>
								<iframe src="http://widgets.datafactory.la/es/eliminatorias/posiciones.html#championship=eliminatorias&appIdTrack=11984&show-descentTable=0&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-ingles':?>
								<iframe src="http://widgets.datafactory.la/es/premierleague/posiciones.html#championship=premierleague&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-espanol':?>
								<iframe src="http://widgets.datafactory.la/es/espana/posiciones.html#championship=espana&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/futbol-italiano':?>
								<iframe src="http://widgets.datafactory.la/es/italia/posiciones.html#championship=italia&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/otras-ligas':?>
								<iframe src="http://widgets.datafactory.la/es/francia/posiciones.html#championship=francia&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>

								<iframe src="http://widgets.datafactory.la/es/holanda/posiciones.html#championship=holanda&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=0&show-AgainstGoals=0&show-WinGames=1&show-TieGames=1&show-LostGames=1&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/champions-league':?>
								<iframe src="http://widgets.datafactory.la/es/champions/posiciones.html#championship=champions&appIdTrack=11984&show-descentTable=0&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/europa-league':?>
								<iframe src="http://widgets.datafactory.la/es/uefa/posiciones.html#championship=uefa&appIdTrack=11984&show-descentTable=0&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=0&show-DescentPoints=0&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/eliminatorias-europeas':?>
								<iframe src="http://widgets.datafactory.la/es/europa/posiciones.html#championship=europa&appIdTrack=11984&show-descentTable=0&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=1&show-AgainstGoals=1&show-WinGames=0&show-TieGames=0&show-LostGames=0&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;

							case '/eliminatorias-concacaf':?>
								<iframe src="http://widgets.datafactory.la/es/concacaf/posiciones.html#championship=concacaf&appIdTrack=11984&show-descentTable=1&team=-1&lang=es&show-positionsTable=1&show-PlayedGames=1&show-Goals=0&show-AgainstGoals=0&show-WinGames=1&show-TieGames=1&show-LostGames=1&show-Diff=1&show-DescentPlayedGames=1&show-DescentPoints=1&show-fixtureTable=1&show-nameDays=1&dateFormat=mmdd&show-goalsTable=1&show-GoalsColumnTeams=1&show-GoalsDetails=1&css-width=280&css-backgroundColor=%23fcfcfc&css-textColor=%23343434&css-desTxtColor=%23BD0926&css-lineColor=%23c2bcbd&css-desEquipoBgColor=%23ffffff&css-desEquipoTxtColor=%23BD0926&css-navBgColorSel=%23BD0926&css-navColorSel=%23FFFFFF&css-navBgColor=%23050608&css-navColor=%23FFFFFF&css-titleFontFamily=Tahoma%2CGeneva%2Csans-serif&css-titlePoints=17&css-titleWeight=1&css-titleItalic=0&css-tabsFontFamily=%22Trebuchet%20MS%22%2Csans-serif&css-tabsPoints=12&css-tabsWeight=0&css-tabsItalic=0&css-mainFontFamily=Verdana%2CGeneva%2Csans-serif&css-mainPoints=13&css-mainWeight=0&css-mainItalic=0&css-height=697&css-tabsColor=%23FFFFFF&css-rowColor=%23BD0926&css-textRowColor=%23FFFFFF&css-borderColor=%23D1D3D4&css-golColor=%23BD0926&css-estadoColor=%23BD0926"  frameborder="0"  width="280"  height="697"  ></iframe>
								<?php
							break;


							default:
								# code...
							break;
						}
					?>
					</div>
					<?php
					print $view_content = views_embed_view("frontpage", "block_7");
					// print $view_content = views_embed_view("frontpage", "block_8");

				?>
			</section> <!-- /#main -->
		</div> <!-- /#container -->
		<?php
	break;
}?>

<?php include("footer.tpl.php");?>