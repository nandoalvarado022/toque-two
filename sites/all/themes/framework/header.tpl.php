<?php 
	global $base_path;


?>

<header id="header">
	<div class="content width_1180">
		<section class="section_logo">
			<figure class="logo">
				<a href="/">
					<img src="<?php echo $base_path?>images/icons/toque-sports-fondo-blanco.jpg">
				</a>
			</figure>

			<div class="pauta desktop">
				<a target="_BLANK" href="http://proyinarq.com/">
					<img src="/images/anuncios/728x90_proyinarq.JPG">
				</a>
				
				<!-- 728x90_1 -->
				<!--<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-4733150240823723"
				     data-ad-slot="5901080299"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>-->
				
			</div>

		</section>

		
		<section>
			<div class="menu movil">
				<img src="<?php echo $base_path?>images/icons/menu-hambur.png">
				<?php print render($page["navigation"]);?>
			</div>

			
			<div class="float_r siguenos_menu" data-width="987px">
				<div class="over_f">
					<div class="float_l">						
						<?php print $view_content = views_embed_view("frontpage", "block_9");?>
					</div>

					<div class="redes_bus">
						<?php print render($page["sidebar_first"]); //print $search_box;?>
						<span class="siguenos desktop">
							SÍGUENOS
						</span>
						<?php
						$toque=false;
						foreach ($node->field_tags["und"] as $key => $value) {
							if ($value["tid"]==7) {
								$toque=true;
							}
						}

						// echo "arg vale:".arg(2);
						if ($toque==true || arg(2)==7) {?>
							<a target="_BLANK" href="https://twitter.com/actualfutbol">
								<img class="tw" src="<?php echo $base_path?>images/icons/twitter.png" />
							</a>
							<a target="_BLANK" href="https://www.instagram.com/actualfutbol">
								<img class="in" src="<?php echo $base_path?>images/icons/instagram.png" />
							</a>
							<a target="_BLANK" href="https://www.youtube.com/user/ActualFutbol">
								<img class="fa" src="<?php echo $base_path?>images/icons/youtube_icon.png" />
							</a>
							<span style="line-height: 45px;">@ActualFutbol</span>
							<?php
						} else if (arg(2)==331 || arg(2)==277) {?><!-- Toque juniorista y toque juniorista tv -->
							<a target="_BLANK" href="https://twitter.com/ToqueSports">
								<img class="tw" src="<?php echo $base_path?>images/icons/twitter.png" />
							</a>
							<a target="_BLANK" href="https://www.instagram.com/toquejuniorista/">
								<img class="in" src="<?php echo $base_path?>images/icons/instagram.png" />
							</a>
							<a target="_BLANK" href="https://www.facebook.com/ToqueSports">
								<img class="fa" src="<?php echo $base_path?>images/icons/face.png" />
							</a>
							<a target="_BLANK" href="https://www.youtube.com/user/ActualFutbol">
								<img class="fa" src="<?php echo $base_path?>images/icons/youtube_icon.png" />
							</a>
							
							<span style="line-height: 45px;">@ToqueSports</span>
							<?php

						} else{?>
							<a target="_BLANK" href="https://twitter.com/ToqueSports">
								<img class="tw" src="<?php echo $base_path?>images/icons/twitter.png" />
							</a>
							<a target="_BLANK" href="https://www.instagram.com/toquesports/">
								<img class="in" src="<?php echo $base_path?>images/icons/instagram.png" />
							</a>
							<a target="_BLANK" href="https://www.facebook.com/ToqueSports">
								<img class="fa" src="<?php echo $base_path?>images/icons/face.png" />
							</a>
							<a target="_BLANK" href="https://www.youtube.com/user/ActualFutbol">
								<img class="fa" src="<?php echo $base_path?>images/icons/youtube_icon.png" />
							</a>
							
							<span style="line-height: 45px;">@ToqueSports</span>
							<?php
						}?>
					</div>
				</div>
				<div class="menu desktop">
					<?php 
						print render($page["navigation"]);
					?>
				</div>
			</div>
		</section>
	</div>
</header>

<script>
	$(".menu.movil").click(function() {
	  $(".region.region-navigation").slideToggle( "slow", function() {
	    // Animation complete.
	  });
	});
</script>

<?php 
$valor = check_tbl_variables();
// $valor = '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FToqueSports%2Fvideos%2F1273130102797089%2F&show_text=0&width=560" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>';
// $valor = "";
if($valor != ""){?>
	
	<script>
		/*
		$(document).ready(function(){
			iframe = `<?php echo $valor?>`;
			html = `
			<div id="streaming_canal">
				<img src="images/miranos-en-live-movil-3.png" class="movil">
				<img src="images/figure_streaming_canal_2.jpg" class="desktop">
				<div class='iframe'>${iframe}</div>
				<a data-width="300" data-height="300" class="twitter-timeline" href="https://twitter.com/ToqueSports">Tweets by ToqueSports</a> 
			</div>`;
			$("main").prepend(html);

			var s = document.createElement("script");
			s.type = "text/javascript";
			s.src = "//platform.twitter.com/widgets.js";
			$("head").append(s);
		})
		*/
	</script>
	<?php
} else{?>
	<script>
		/*
		$(document).ready(function(){
			html = `
			<div id="streaming_canal">
				<img src="images/miranos-en-live-movil-3.png" class="movil">
				<img src="images/figure_streaming_canal_2.jpg" class="desktop">
			</div>`;
			$("main").prepend(html);
		})
		*/
	</script>
	<?php
}?>