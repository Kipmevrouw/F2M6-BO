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
<section id="bezoek-plan">
<h1>Bezoek Foam <br> vandaag</h1>
<h3>Open vandaag: 10:00 - 17:00 <br>
Keizersgracht 609, 1017DS Amsterdam <br>
+31 020 5516 500</h3>
</section>
<?php
get_footer();
?>