<?php 

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:image',
	'content' => image_style_url('530x390', $node->field_image['und'][0]['uri']),
));
drupal_add_html_head($var, 'og_image');


$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:description',
	'content' => substr(strip_tags($node->body["und"][0]["value"]), 0, 255)
));
drupal_add_html_head($var, 'og_description');





$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:title',
	'content' => $node->title,
));
drupal_add_html_head($var, 'og_title');

$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:type',
	'content' => "article"
));
drupal_add_html_head($var, 'og_type');

$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:url',
	'content' => $actual_link
));
drupal_add_html_head($var, 'og_url');

?>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ToqueSports">

<meta name="twitter:creator" content="@ToqueSports">
<meta name="twitter:title" content="<?php echo $title?>">
<meta name="twitter:image" content="<?php echo file_create_url($node->field_image['und'][0]['uri'])?>">
<meta name="twitter:description" content="<?php echo strip_tags($node->body['und'][0]['summary'])?>">

<?php

if(isMobile()){
	print $view_content = views_embed_view("articulo", "block_2");
} else{
	print $view_content = views_embed_view("articulo", "block_1");
}?>

<div class="sidebar_der desktop">

	<!-- newletter -->
	<!-- <a href="/suscripcion" target="_BLANK">
		<img src="/images/barra_newletter.png" alt="Suscribete a nuestro Newsletter" target="_BLANK" style="box-shadow: -1px 1px 1px #ccc;">
	</a> -->

	<!-- 300x250_1 -->	
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-4733150240823723"
	     data-ad-slot="4064420291"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

	<h3>RECIENTES</h3>

	<?php
		// echo "<pre>"; print_r($node->field_tags["und"]); echo "</pre>";
		$twHash="ToqueSports";
		$nombreMostrar="ToqueSports";
		$fbHash="ToqueSports";
		foreach ($node->field_tags["und"] as $key => $value) {
			// echo "El valor es:". 
			$value["tid"];
			if ($value["tid"]==7) {
				// $twHash="ActualFutbol";
				// $nombreMostrar="ActualFutbol";
				// $fbHash="ToqueSports";
			}
		}
	?>

	<a class="twitter-timeline" data-width="300" data-height="500" data-theme="dark" href="https://twitter.com/<?php echo $twHash?>">Tweets by <?php echo $nombreMostrar?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	
	<!-- 300x250_3 -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:250px"
	     data-ad-client="ca-pub-4733150240823723"
	     data-ad-slot="4284746293"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=980690795346065";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-page" data-href="https://www.facebook.com/<?php echo $fbHash?>" data-tabs="timeline" data-width="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo $fbHash?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo $fbHash?>"><?php echo $nombreMostrar?></a></blockquote></div>

</div>

<?php print render($content['body'])?>

<!-- Comentarios face -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=980690795346065";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<?php 
	if(isMobile()){?>
		<div data-width="300" class="fb-comments" data-href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" data-numposts="5"></div>
		<?php
	} else{?>
		<div data-width="800" class="fb-comments" data-href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" data-numposts="5"></div>
		<?php
	}?>
<!-- Comentarios face -->

<!-- Disqus -->
	<!--
	<div id="disqus_thread"></div>
	<script>
	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://panlaredu.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();

</script><p></p><noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>-->
<!-- Disqus -->

<?php print render($content['field_relacionados'])?>

<?php print $view_content = views_embed_view("frontpage", "block_5", $node->field_tags["und"][0]["tid"]);?>

<!-- Añadiendo el video en foto -->
<script>
	if (screen.width>480) {
		obj=".view-id-articulo.view-display-id-block_1";
		if ($(obj+" .views-field-field-video .field-content").text()!=""){
			html='<iframe width="650" height="470" src="//youtube.com/embed/'+$(obj+" .views-field-field-video .field-content").text()+'" frameborder="0" allowfullscreen></iframe>';
			$(obj+" .views-field-field-image .field-content").html(html);
		}
	} else{
		obj=".view-id-articulo.view-display-id-block_2";
		if ($(obj+" .views-field-field-video .field-content").text()!=""){
			html='<iframe width="320" height="180" src="//youtube.com/embed/'+$(obj+" .views-field-field-video .field-content").text()+'" frameborder="0" allowfullscreen></iframe>';
			$(obj+" .views-field-field-image .field-content").html(html);
		}
	}
</script>

<!-- Sharethis -->
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58b206201d713c001295ee1f&product=sticky-share-buttons"></script>