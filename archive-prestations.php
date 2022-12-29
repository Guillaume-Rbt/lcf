<?php
$womenPrest = new WP_Query(['post_type' => 'prestations', 'nopaging' => true, "types_de_prestation" => "femme",  'orderby' => 'prix_ml', 'order' => 'ASC']);
$menPrest = new WP_Query(['post_type' => 'prestations', 'nopaging' => true, "types_de_prestation" => "homme",  'orderby' => 'prix_ml', 'order' => 'ASC']);
?>

<div class="container_prestation">

    <h2 class="prestations"> <span class="lettrine" id="prestations">T</span>ARIFS </h2>



    <div class="info">
        <p>Déplacement à 20 km autour de Corre en Haute-Saône</p>
        <p>Un diagnostic sera réalisé et des conseils pourront vous être donnés selon vos envies.</p>
    </div>

    <div class="content_prest">



        <div class="prest_wrapper">
            <h2>Femme</h2>
            <?php while ($womenPrest->have_posts()) :  ?>
                <?php $womenPrest->the_post() ?>
                <p><?= the_title() ?> <span>à partir de <?= get_post_meta(get_the_ID(), "prix_u", true)  ?></span></p>
            <?php endwhile ?>
        </div>

        <div class="prest_wrapper">
            <h2>Homme</h2>
            <?php while ($menPrest->have_posts()) :  ?>
                <?php $menPrest->the_post() ?>
                <p><?= the_title() ?> <span>à partir de <?= get_post_meta(get_the_ID(), "prix_u", true)  ?></span></p>
            <?php endwhile ?>
        </div>
    </div>

    <div class="info">
                <p>Pour toute autre prestation (de couleurs, coiffages, coupes enfants, soins, bon cadeau, coiffures de soirée ou de mariage, ...) n'hésitez pas à me contacter afin que je vous fasse part de mes tarifs.</p>
                <div class="imgContPrest"><img src="wp-content/themes/twentytwenty-child/assets/img_gift.png" alt="Cadeaux de coiffure"> </div>
                <p class="paiement">Seuls les chèques et les espèces sont acceptés.</p>
            </div>
        </div>

    <!-- <div class="content_prest">


        <div class="prest_wrapper">
            <h2>Forfaits</h2>
            <div class="prest_grid">
                <div class="title_prest"></div>
                <p class="long">Court</p>
                <p class="long">Mi-long</p>
                <p class="long">Long</p> -->


    <?php /* while ($the_query1->have_posts()) :; ?>
                    <?php $the_query1->the_post() ?>
                    <?php $prix = get_post_meta(get_the_ID(), "prix_u", true); ?>


                    <?php if ($prix != "") : ?>
                        <div class="title_prest">
                            <p> <?= the_title() ?> </p>
                            <p class="descrition"><?= get_post_meta(get_the_ID(), 'description', true) ?></p>
                        </div>
                        <p></p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_u", true) ?> </p>
                        <p></p>
                    <?php else : ?>
                        <div class="title_prest">
                            <p> <?= the_title() ?> </p>
                            <p class="descrition"><?= get_post_meta(get_the_ID(), 'description', true) ?></p>
                        </div>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_c", true) ?> </p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_ml", true) ?> </p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_l", true) ?> </p>
                    <?php endif ?>
                <?php endwhile ?>
            </div>

            <div class="info">
                <p>Pour toute demande particulière, l'élaboration d'un devis ou bien l'envie de faire plaisir à vos proches avec un bon cadeau, n'hésitez pas à me contacter.</p>
                <div class="imgContPrest"><img src="wp-content/themes/twentytwenty-child/assets/img_gift.png" alt="Cadeaux de coiffure"> </div>
                <p class="paiement">Seuls les chèques et les espèces sont acceptés.</p>
            </div>
        </div>


        <div class="prest_wrapper">
            <h2>À la carte</h2>
            <div class="prest_grid">
                <div class="title_prest"></div>
                <p class="long">Court</p>
                <p class="long">Mi-long</p>
                <p class="long">Long</p>
                <?php while ($the_query2->have_posts()) :; ?>
                    <?php $the_query2->the_post() ?>
                    <?php $prix = get_post_meta(get_the_ID(), "prix_u", true); ?>


                    <?php if ($prix != "") : ?>
                        <div class="title_prest">
                            <p> <?= the_title() ?> </p>
                            <p class="descrition"><?= get_post_meta(get_the_ID(), 'description', true) ?></p>
                        </div>
                        <p></p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_u", true) ?> </p>
                        <p></p>
                    <?php else : ?>
                        <div class="title_prest">
                            <p> <?= the_title() ?> </p>
                            <p class="descrition"><?= get_post_meta(get_the_ID(), 'description', true) ?></p>
                        </div>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_c", true) ?> </p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_ml", true) ?> </p>
                        <p> <?php echo get_post_meta(get_the_ID(), "prix_l", true) ?> </p>
                    <?php endif ?>
                <?php endwhile ?> 

            </div>
        </div> 
    </div> */ ?>
</div>