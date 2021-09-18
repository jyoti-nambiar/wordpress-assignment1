<?php /* Template Name: forfattare */
get_header();

?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php the_author();  ?></h1>

                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                    ?>
                            <article>
                                <img src="<?php the_post_thumbnail(); ?>" />
                                <h2 class="title">
                                    <a href="inlagg.html"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_date();  ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();  ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
                                    </li>
                                </ul>
                                <p><?php the_content();  ?></p>
                            </article>


                    <?php }
                    } ?>

                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Nästa</a>
                    </nav>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>