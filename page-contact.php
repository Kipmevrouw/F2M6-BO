<section id="wit">
<?php
get_header();
?>
<section id="witcontact">
<section id="social">
<h1>Foam is bereikbaar <br> voor vragen via:</h1>
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
	
</section>
<section id="social2">
		<img src="<?php echo get_template_directory_uri()?>/img/contactfoto.png"/>

</section>
</section>
<?php
get_footer();
?>
</section>


