<!-- Activar "Ver perfiles de usuario" en permisos para anonimo -->
<!-- http://localhost:81/users/sebastian-lemos -->
<!-- controller -->
<?php 
    // header('Location: /');
    $uid=$user_profile["field_nombre"]["#object"]->uid;
    $user_data=user_load($uid);
    $picture_uri=$user_data->field_foto_vertical["und"][0]["uri"];
    // echo "<pre>"; print_r($user_data);
    $descripcion=$user_data->field_descripcion["und"][0]["value"];
    $vista_mas_leidos=views_get_view('usuarios')->preview('block_1');
?>

<!-- fin controller -->

<!-- view -->
<h1><?php print $user_data->name?></h1>

<div class="top oh">
    <img id="img_profile" src="<?php echo image_style_url('350x550', $picture_uri)?>">
    <div class="description">
        <?php echo $descripcion?>
    </div>
    <div class="right">
        <?php echo $vista_mas_leidos?>

    </div>
</div>

<div class="bottom">
    <div class="botonera">
        <span>Ordenar por</span>
        <button onclick="cambiarVista(1)">Recientes</button>
        <button onclick="cambiarVista(2)">Ranking de visitas</button>
    </div>

    <?php print views_get_view('usuarios')->preview('block_2');?>

    <?php print views_get_view('usuarios')->preview('block_3');?>    

    <div class="sidebar_der desktop">
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

</div>

<script>
    function cambiarVista(sw){
        $(".view-id-usuarios.view-display-id-block_2, .view-id-usuarios.view-display-id-block_3").removeClass("active");        
        if(sw==2) $(".view-id-usuarios.view-display-id-block_2").addClass("active");
        else $(".view-id-usuarios.view-display-id-block_3").addClass("active");
    }
</script>

<!-- fin view -->
