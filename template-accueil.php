<?php

/**
 * Template Name: Page d'accueil
 * Template Post Type: page
 * 
 */


?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post() ?>


    <div class="content_acc">
        <div class="txt">
            <?= the_content() ?>
        </div>

        <div class="slider">
            <img data-index="1" src="wp-content/themes/twentytwenty-child/assets/femme.png" alt="photo de coiffure femme" class="thumbnailAcc fade">
            <img data-index="2" src="wp-content/themes/twentytwenty-child/assets/homme.png" alt="homme coiffure" class="thumbnailAcc">
            <img data-index="3" src="wp-content/themes/twentytwenty-child/assets/enfant.png" alt="enfant coiffure Haute-Saône" class="thumbnailAcc">
        </div>



        <div class="separator s1"><img src="wp-content/themes/twentytwenty-child/assets/linebackground.svg" alt=""> </div>
    </div>


<?php endwhile ?>


<div class="separator s1"> </div>


<div class="content_pres">
    <div class="imgCont"><img src="wp-content/themes/twentytwenty-child/assets/florine.jpg" alt="Florine Collardez - Coiffeuse à domicile en Haute-Saône" class="photo_pres"> </div>
    <div class="pres_txt">
        <h2 id="titlePres">Je m'appelle Florine </h2>
        <p>
            C'est auprès de l'école privée de coiffure AFCO à Besançon, réputée pour son apprentissage et la réussite de ses élèves, que j'ai choisie de me tourner pour apprendre le domaine de la coiffure.
        </p>
        <p>
            J'ai immédiatement eu le coup de cœur pour ce métier mêlant à la fois le côté technique et le côté artistique.
        </p>
        <p>
            Sortie diplômée de l'école en 2015 et riche de mes expériences dans différents salons de la région où j'ai eu la chance de travailler, j'ai alors décidé qu'il était temps pour moi de me lancer dans l'aventure de la coiffure à domicile en créant ma micro-entreprise.
        </p>
    </div>
</div>




<h2 id="fonctionnement" class="fonctionnement">Comment ça marche ?</h2>
<ul class="fonctionnement_container">
    <li>
        <div class="card-header">
            <img width="28px" src="wp-content/themes/twentytwenty-child/assets/car.svg" >
            <h3>Zone de déplacement</h3>
        </div>
        <p>Je me déplace à 20km autour de Corre en Haute-Saône</p>
        <p>Disponible du lundi au vendredi de 9h à 18h. Ainsi que le samedi de 9h à 12h.</p>
    </li>
    <li>
        <div class="card-header">
        <img src="wp-content/themes/twentytwenty-child/assets/calendar.svg" >
            <h3>Prise de rendez vous</h3>
        </div>
        <p>Vous pouvez prendre rendez-vous par téléphone ou par SMS au 06.31.10.42.07.</p>
        <p>Nous programmerons ensemble le jour et l'heure de votre rendez-vous.</p>
    </li>
    <li>
        <div class="card-header">
        <img src="wp-content/themes/twentytwenty-child/assets/ciseaux2.svg" >
            <h3>Le jour-J</h3>
        </div>
        <p>Avant de commencer, j'effectue un diagnostic sur vos envies et vous conseille en fonction de votre style et de vos petits rituels capillaires. Ensuite ? </p>
        <p>Glissez vos pieds sous la table, j'apporte tout le matériel nécessaire.</p>
    </li>
    <li>
        <div class="card-header">
        <img src="wp-content/themes/twentytwenty-child/assets/discussion.svg" >
            <h3>Partagez</h3>
        </div>
        <p>Si vous êtes satisfait de mon travail, n'hésitez pas à partager votre nouvelle tête et votre expérience de la coiffure à domicile auprès de vos proches.</p>
    </li>
</ul>
<?php require 'archive-prestations.php' ?>

<div class="separator"></div>

<?php require 'template-contact.php' ?>

<!-- <div class="separator s3">
<img src="wp-content/themes/twentytwenty-child/assets/line-big-reverse.png" alt="">
<img src="wp-content/themes/twentytwenty-child/assets/line-big.png" alt="">
</div> -->
<?php get_footer() ?>