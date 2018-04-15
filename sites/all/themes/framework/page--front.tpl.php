<?php 
global $base_url;
$base_theme=path_to_theme();
include "header.tpl.php";?>

	<main>		

		<?php print views_embed_view('frontpage', 'block_1');?> <!-- Slider -->

		<div class="content">
			<?php print views_embed_view('frontpage', 'block_2');?><!-- 9 noticias -->
		</div>
		
		<div class="sidebar_der">

			<!-- 300x600_1 -->
				<div class="pauta">
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:600px"
					     data-ad-client="ca-pub-4733150240823723"
					     data-ad-slot="5401552695"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>


			

				

			<?php print views_embed_view('encuesta', 'block_1');?><!-- Encuesta -->
		</div>


		<?php print views_embed_view('frontpage', 'block_10');?><!-- Bloque 3 noticias -->

		<div class="sidebar_der">

			<div class="desktop">
				<h3>RECIENTES</h3>
				<a class="twitter-timeline" data-width="300" data-height="500" data-theme="dark" href="https://twitter.com/ToqueSports">Tweets by ToqueSports</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

			<!-- 300x250_1 -->
				<div class="pauta">
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-4733150240823723"
					     data-ad-slot="4064420291"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>

			<?php print views_embed_view('frontpage', 'block_13');?><!-- Foto de la semana -->

			<?php print views_embed_view('frontpage', 'block_12');?><!-- Video de la semana -->

			<!-- 300x250_2 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-4733150240823723"
			     data-ad-slot="8854546697"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>


		</div>

			
		


			


		
		

		<div class="content">
			<div class="ultimos_prog">
				<h3>ÚLTIMOS PROGRAMAS</h3>
				<?php print views_embed_view('frontpage', 'block_3');?>
				<?php print views_embed_view('frontpage', 'block_4');?>
			</div>
		</div>
		

		<?php print views_embed_view('frontpage', 'block_11');?>

		<div class="sidebar_der">
			<!-- Espacio para el widget de podcats -->
				<?php print views_embed_view('frontpage', 'block_15');?>
			<!-- Espacio para el widget de podcats -->
			<?php print views_embed_view('users', 'block_1');?>
			<!-- Facebook -->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=980690795346065";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<div class="fb-page" data-href="https://www.facebook.com/ToqueSports" data-tabs="timeline" data-width="300px" data-height="585px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ToqueSports" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ToqueSports">Toque Sports</a></blockquote></div>
			<!-- fin Facebook -->
		</div>

		<?php print views_embed_view('frontpage', 'block_14');?><!-- Bloque 3 noticias -->



	</main>

	<script>
		$(".view-id-frontpage.view-display-id-block_1 .view-content").owlCarousel({items:1, navigation:true, 	autoPlay: true,
			navText: ["&#x27;next&#x27;", "&#x27;prev&#x27;"]
		});
	</script>
<?php include "footer.tpl.php";?>