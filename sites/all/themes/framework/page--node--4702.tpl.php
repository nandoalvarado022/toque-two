<?php 
global $base_url;
$base_theme=path_to_theme();
include "header.tpl.php";?>

	<div id="container" class="clearfix">
		<section id="main" role="main" class="clearfix">

			<h1>Multimedia</h1>

			<?php
				// echo "<pre>"; print_r(views_get_view_result("multimedia", "block_1"));
				
				$view=views_get_view('multimedia');
				print $view->preview('block_1');
			?>

			<div class="pauta desktop">
				<a target="_BLANK" href="http://proyinarq.com">
					<img src="/images/anuncios/728x90_proyinarq.JPG">
				</a>
			</div>

			<div id="ultimas_noticias" class="left">
				<?php
				$view=views_get_view('multimedia');
				print $view->preview('block_2');?>
			</div>

			<div id="podcast" class="sidebar_der">
				<?php
				$view=views_get_view('multimedia');
				print $view->preview('block_3');?>
			</div>

			<div style="clear: both;"></div>

			<div class="pauta desktop">
				<a target="_BLANK" href="http://proyinarq.com">
					<img src="/images/anuncios/728x90_proyinarq.JPG">
				</a>
			</div>

			<?php
				$view=views_get_view('multimedia');
				print $view->preview('block_4');?>
		</section>

	</div>

<?php include "footer.tpl.php";?>