<?php /*Template Name:undersida */


get_header();

?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>

                        <?php the_title(); ?>

                    </h1>
                    <?php the_content(); ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <ul class="side-menu">
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'secondary',
                                'container' => '',
                                'theme_location' => 'secondary',

                            )

                        ); ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>