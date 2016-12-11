<!DOCTYPE html>
<?php
    get_header();
    ?>
<html>
    <body>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <h3 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h3>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
    <?php
                the_content();
        }
        }
        echo "LISTO";
        ?>
        <?php get_sidebar(general);?>
    </body>
</html>
<?php
    get_footer();
    ?>