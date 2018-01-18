<?php 
if ($_POST) {		
	$num_updated = db_update('tbl_variables')
	->fields(array(
		'valor' => $_POST["iframe"]
	))
	->condition('id', 1, '=')
	->execute();
}

include("header.tpl.php");?>

	<div id="container" class="clearfix">

		<section id="main" role="main" class="clearfix">
			<?php print $messages; 
			$query = "SELECT valor FROM tbl_variables WHERE id = 1";
			$result = db_query($query);
			foreach ($result as $res) {
			  $valor = $res->valor;
			}?>

			<form action="#" method="POST">
				<textarea name="iframe" id="" cols="30" rows="10" placeholder="Pegue aquí el codigo del inframe"><?php print $valor?></textarea>
				<input type="submit" value="Actualizar">
			</form>
		</section> <!-- /#main -->
	</div> <!-- /#container -->
<?php include("footer.tpl.php");?>