<!-- controller -->
<?php 
    $uid=$user_profile["field_nombre"]["#object"]->uid;
    $user_data=user_load($uid);
    $descripcion=$user_data->field_descripcion["und"][0]["value"];

    $vista_mas_leidos=views_get_view('usuarios')->preview('block_1');
?>

<!-- fin controller -->

<!-- view -->

<div class="cuadrito">
    <?php echo $descripcion?>
    <?php echo $vista_mas_leidos?>
</div>

<!-- fin view -->
