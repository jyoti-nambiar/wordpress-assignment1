<?php /* Template Name: search */

get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <h1>Search Results</h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <h3><?php the_title();     ?></h3>
                    <p><?php the_content();     ?></p>


                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div>
    </div>
</main>

<?php get_footer(); ?>