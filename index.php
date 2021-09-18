<?php get_header();

?>

//the loop

<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php the_title(); ?></h1>

                    // Display post content
            <?php endwhile;
        endif;
            ?>
                </div>
    </div>
</div>

<?php get_footer(); ?>