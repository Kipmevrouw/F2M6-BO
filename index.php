<?php
get_header();
?>
<!-- <?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title() ?></h2>
		<?php the_content() ?>
        <a href="<?php the_permalink()?>" class="btn btn-blue">Lees meer</a>
        <hr>

	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

?> -->
<?php if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
    <div class="justify-items-start absolute">
        <div class="duration-700 transform -translate-x-full" id="yes">
            <img class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-10" src="<?php echo wp_get_attachment_url(get_theme_mod('basic-customImage-callout-image')) ?>" alt="Custom Image">
        </div>
    </div>
<?php } ?>



<?php


if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- the body -->
        <a href="<?php the_permalink() ?>">
            <section class="bg-primary-0 text-white">
                <div class="container mx-auto text-white">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="flex justify-end">
                            <img class="img-small transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-0" src="<?php the_post_thumbnail_url('medium_large'); ?>" />
                        </figure>
                    <?php endif ?>
                    <h2 class="text-white"><?php the_title() ?></h2>
                    <?php the_content() ?>
                    <hr>
                </div>
            </section>
        </a>

<?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<section class="bg-primary-100 color-primary-0">
    <div>
        <h1>YES</h1>
    </div>
</section>
<?php
get_footer();
?>
