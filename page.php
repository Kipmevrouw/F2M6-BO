<?php
get_header();
?>
<div id="social">
<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title() ?></h2>
		<?php the_content() ?>
        <hr>

	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

?>
</div>
<?php
get_footer();
?>
