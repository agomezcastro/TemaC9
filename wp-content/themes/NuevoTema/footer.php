<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>"/>
    </head>
    <body>
        <div id="pie">
            <h1>Fin de la página</h1>
            <h2>Menu King</h2>
        <?php wp_nav_menu(
            array(
                'menu' => 'NuevoMenu'
                )); ?>
        </div>
    </body>
</html>