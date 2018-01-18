<?php
$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:image',
	'content' => file_create_url($node->field_image['und'][0]['uri']),
));
drupal_add_html_head($var, 'og_image');


$var = array(
	'#tag' => 'meta',
	'#attributes' => array(
	'property' => 'og:description',
	'content' => strip_tags ($node->body["und"][0]["value"])
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
drupal_add_html_head($var, 'og_url');?>

<main>
	<?php 
	print "<h1>".$title."</h1>";
	if(isMobile()){
		print $view_content = views_embed_view("articulo", "block_4");
	} else{
		print $view_content = views_embed_view("articulo", "block_3");
	}
	print $view_content = views_embed_view("frontpage", "block_6");
	?>



</main>

<script>
	
	$(".views-field-field-imagenes .field-content").owlCarousel({
		items: 1, navigation: true,
		autoHeight:true,
		navText: ["&#x27;next&#x27;", "&#x27;prev&#x27;"]
	});
</script>

<!-- Sharethis -->
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58b206201d713c001295ee1f&product=sticky-share-buttons"></script>