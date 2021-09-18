<?php /*Template Name:undersida4 */


get_header();
?>

<?php $main = get_field('main-content'); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h1>Undersida 4</h1>
                    <?php echo $main['left_side']; ?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <img src="<?php echo $main['right_side']; ?>" />
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>