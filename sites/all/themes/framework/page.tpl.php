<?php include("header.tpl.php");?>

	<div id="container" class="clearfix">

		<section id="main" role="main" class="clearfix">
			<?php print $messages; ?>
			<a id="main-content"></a>
			<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
			<?php print render($title_prefix); ?>
			
			<?php print render($title_suffix); ?>
			<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
			<?php print render($page['content']); ?>
		</section> <!-- /#main -->
	  

	</div> <!-- /#container -->


<?php include("footer.tpl.php");?>