<?php /* Template Name: arkiv*/

get_header();

?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php the_title();   ?></h1>
                    <!-- loop and calls in all previous posts from wp -->

                    <?php
                    $args = array(
                        'post_type' => 'post'
                    );

                    $post_query = new WP_Query($args);

                    if ($post_query->have_posts()) {
                        while ($post_query->have_posts()) {
                            $post_query->the_post();
                    ?>
                            <article>
                                <?php the_post_thumbnail(); ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink();   ?>"><?php the_title();   ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_date();  ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href=""><?php the_category(); ?></a>
                                    </li>
                                </ul>
                                <p><?php the_excerpt();  ?></p>
                            </article>
                    <?php   }
                    } ?>
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Nästa</a>
                    </nav>
                </div>

                <?php get_sidebar();  ?>

            </div>
        </div>
    </section>
</main>


<?php get_footer();  ?>