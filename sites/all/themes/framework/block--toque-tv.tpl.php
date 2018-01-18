<div id="container" class="clearfix">
	<section id="main" role="main" class="clearfix">
		<h1>
			<figure class="icon">
			</figure>
			<?php echo $title?>
		</h1>
		<div style="overflow: hidden; background: white">
		<?php
			print $view_content = views_embed_view("toque_tv", "block_1");
			print $view_content = views_embed_view("toque_tv", "block_2");
		?>
		</div>
		<?php
			// Videos destacados
			print $view_content = views_embed_view("toque_tv", "block_3");
			// Repositorio
			print $view_content = views_embed_view("toque_tv", "block_4");
		?>
	</section>
</div>

<!-- Añadiendo el video en foto -->
<script>
	
		obj=".view-id-toque_tv.view-display-id-block_1";
		if ($(obj+" .views-field-field-video .field-content").text()!=""){
			html='<iframe width="650" height="470" src="//youtube.com/embed/'+$(obj+" .views-field-field-video .field-content").text()+'" frameborder="0" allowfullscreen></iframe>';
			$(obj+" .views-field-field-image .field-content").html(html);
		}
	

	
	$(".view-id-toque_tv.view-display-id-block_3 .view-content").owlCarousel({items:3, navigation:true, autoPlay: false,
		navText: ["&#x27;next&#x27;", "&#x27;prev&#x27;"]
	});
</script>