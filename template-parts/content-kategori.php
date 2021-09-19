<article>
    <?php the_post_thumbnail();  ?>
    <h2 class="title">
        <a href="<?php the_permalink();   ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
        <li>
            <i class="fa fa-calendar"></i> <?php the_date();  ?>
        </li>
        <li>
            <i class="fa fa-user"></i> <a href="<?php the_author_posts_link(); ?>"></a>
        </li>
        <li>
            <i class="fa fa-tag"></i> <a href="<?php echo get_template_directory_uri() . '/category.php' ?>"><?php the_category(); ?></a>
        </li>
    </ul>
    <p><?php the_excerpt();  ?></p>
</article>