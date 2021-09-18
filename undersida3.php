<?php /*Template Name:undersida3 */


get_header();

?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <h1><?php the_title();  ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>