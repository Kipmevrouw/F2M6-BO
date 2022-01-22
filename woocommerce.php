<?php
get_header();
?>
<section id="shop-plaatje">
    <h3>Bedrijfsuitjes</h3>
    <img src="<?php echo get_template_directory_uri()?>/img/frontpage.jpg"/>
</section>
<section id="shop-css">
    <?php woocommerce_content();?>
</section>


<?php
get_footer();
?>