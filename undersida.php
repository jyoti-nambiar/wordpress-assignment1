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
                        <li>
                            <a href="undersida.html">Undersida</a>
                        </li>
                        <li>
                            <a href="undersida2.html">Undersida 2</a>
                        </li>
                        <li>
                            <a href="undersida3.html">Undersida 3</a>
                        </li>
                        <li>
                            <a href="undersida4.html">Undersida 4</a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>