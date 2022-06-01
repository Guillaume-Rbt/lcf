<?php

/**
 * Template Name: Page défault
 * Template Post Type: page
 * 
 */


?>

<?php get_header(); ?>

<h2 id="galerie"><?= get_the_title() ?></h2>

<div class="content_container">

<?= the_content() ?>


</div>



<?php get_footer() ?>