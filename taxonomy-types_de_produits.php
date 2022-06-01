<?php get_header() ?>

<h1 id="titleCatProd"><?php single_term_title();?> </h1>

<div class="fonctionnement_boutique">
    <p>Pour commander un produit ou un accessoire, contacter moi par téléphone ou via le formulaire en m'indiquant la référence et la quantité. </p>
    <p>Vous pourrez choisir d'être livré lors de votre prochain rendez-vous ou d'obtenir votre commande le plus rapidement possible moyennant 5€ de frais, dans la limite de ma zone de déplacement.</p>
</div>

<?php $title =  strtolower(single_term_title("" , false)) ?>
<?php 
$the_terms = get_term_by('slug' ,get_query_var('term'), get_query_var('taxonomy'))?>


<?php 

$terms = get_terms([
    "taxonomy" => "types_de_produits", 
    "hide_empty" => false

]);

/* var_dump($terms) */

?>


<?php if($title == "produits" ) :; ?>
 
<?php 

for ($i = 0 ; $i < count($terms) ; $i++) {
 if ($terms[$i]->parent == $the_terms->term_id) { ?>
     <h5 class="ProductType"><?=$terms[$i]->name;?></h5> 
     <?php
    $the_slug = $terms[$i]->slug;
    $thequery = new WP_Query(['post_type' => 'produits_en_vente', 'nopaging' => true, "types_de_produits" =>"$the_slug"]); ?>

    <div class="product-wrapper">
    <?php while($thequery->have_posts()) : ;?>
    <?php $thequery->the_post() ; ?>
    <div class="card-product">
    <?= get_the_post_thumbnail("" , "", ["class" => "imgProduct"]) ?>
    <h4><?= the_title() ?> </h4>
    <p class="price"> Prix : <?= get_post_meta(get_the_ID() , "prix" , true) ?></p>
    <p class="ref">ref : #<?=get_post_meta(get_the_ID() , "ref" , true) ?></p>
    <a href="<?= the_permalink() ?>" >En savoir plus </a>
    </div>
    <?php endwhile ?>
    </div>



<?php } } ?>

<?php else : ?>
    <?php $the_query1 = new WP_Query(['post_type' => 'produits_en_vente', 'nopaging' => true, "types_de_produits" =>"$title"]); ?>
    <div class="product-wrapper">
<?php while($the_query1->have_posts()) : ;?>
<?php $the_query1->the_post() ; ?>
<div class="card-product">
<?= get_the_post_thumbnail("" , "", ["class" => "imgProduct"]) ?>
<h4><?= the_title() ?> </h4>
<p class="price"> Prix : <?= get_post_meta(get_the_ID() , "prix" , true) ?></p>
<p class="ref">ref : #<?=get_post_meta(get_the_ID() , "ref" , true) ?></p>
<a href="<?= the_permalink() ?>" >En savoir plus </a>
</div>
<?php endwhile ?>
</div>
<?php endif ?>


<?php get_footer() ?>