<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php

$contador=$_SESSION["contador"];
if ($contador == undefined or $contador == "" or $contador>=3) {
	$_SESSION["contador"]=0;
}
$_SESSION["contador"]++;
if ($_SESSION["contador"]==1) {?>
	<img src="<?php echo image_style_url('650x370', $row->_field_data["nid"]["entity"]->field_image['und'][0]['uri']); ?>">
	<?php
} else{?>
	<img src="<?php echo image_style_url('186x186', $row->_field_data["nid"]["entity"]->field_image['und'][0]['uri']); ?>">
	<?php
}

