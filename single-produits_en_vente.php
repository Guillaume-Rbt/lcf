<?php get_header() ?>


<h2><?= get_the_title() ?></h2>
<?php $term_link = get_the_terms(get_the_ID(), "types_de_produits");
$the_link = "";

if($term_link[0]->parent!=0) {
    $the_link = get_term_link($term_link[0]->parent);
} else {
    $the_link  = "https://lesciseauxdeflorine.fr/index.php/types_de_produits/accessoires/";
}
 ?>
<div class="single_container">


    <div class="product_content">
    <a title="Retour à la page précédente" href="<?= $the_link ?>" class="back">Retour</a>
        <div class="image"><?= get_the_post_thumbnail() ?></div>

        <div class="product_text">
            <h5><?= the_title() ?></h5>

            <h4>Description :</h4>
            <p><?= get_post_meta(get_the_ID(), "description", true); ?></p>

            <?php if (get_post_meta(get_the_ID(), "ingredients", true) != "") : ?>
                <h4>Ingrédients : </h4>
                <p><?= get_post_meta(get_the_ID(), "ingredients", true); ?></p>
            <?php endif ?>
            <p class="ref">ref : #<?= get_post_meta(get_the_ID(), "ref", true) ?></p>
            <p class="price-single">Prix : <?= get_post_meta(get_the_ID(), "prix", true); ?></p>
        </div>

    </div>

</div>

<?php get_footer() ?>