<!-- Activar "Ver perfiles de usuario" en permisos para anonimo -->
<!-- http://localhost:81/users/sebastian-lemos -->
<!-- controller -->
<?php 
    // header('Location: /');
    $uid=$user_profile["field_nombre"]["#object"]->uid;
    $user_data=user_load($uid);
    $picture_uri=$user_data->picture->uri;
    // echo "<pre>"; print_r($user_data);
    $descripcion=$user_data->field_descripcion["und"][0]["value"];
    $vista_mas_leidos=views_get_view('usuarios')->preview('block_1');
?>

<!-- fin controller -->

<!-- view -->
<h1><?php print $user_data->name?></h1>

<div class="top">
    <img id="img_profile" src="<?php echo image_style_url('350x550', $picture_uri)?>">
    <div class="description">
        <?php echo $descripcion?>
    </div>
    <div class="right">
        <?php echo $vista_mas_leidos?>

    </div>
</div>

<div class="bottom">
    <?php print views_get_view('usuarios')->preview('block_2');?>

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

</div>

<!-- fin view -->
