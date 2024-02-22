<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This home template renders content from others pages, the children of
  the `photography` page to display a nice gallery grid.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/

?>
<?php snippet('header') ?>
<?php snippet('intro') ?>
<?php
  /*
    We always use an if-statement to check if a page exists to
    prevent errors in case the page was deleted or renamed before
    we call a method like `children()` in this case
  */
?>

<p>
  <?= $page->c_est_quoi_1() ?>
</p>

<img src="assets/images/photo-magasin.png" alt="une photo dans le magasin avec des humains et des produits">

<p>
  <?= $page->c_est_quoi_2() ?>
</p>

<ul class="picto-selection-produits">
  <li><img src="assets/icons/picto-local.png" alt="picto local"></li>
  <li><img src="assets/icons/picto-bio.png" alt="picto bio"></li>
  <li><img src="assets/icons/picto-saison.png" alt="picto saison"></li>
  <li><img src="assets/icons/picto-emballage.png" alt="picto emballage"></li>
  <li><img src="assets/icons/picto-humain.png" alt="picto humain"></li>
</ul>

<h3>
  <?= $page->titre_communaute() ?>
</h3>

<p>
  <?= $page->c_est_quoi_3() ?>
</p>

<img src="assets/images/illustration-chariot.png" alt="une illustration avec le chariot rempli de bons produits et de symobles de nos valeurs: plantes, oiseaux, jardinage, vélo...">

<div class="button-container">
  <a class="button" href="">L'association</a>
</div>

<h3>
  <?= $page->titre_engagements() ?>
</h3>

<?= $page->c_est_quoi_4() ?>

<img src="assets/images/photo-magasin-2.png" alt="une autre photo du magasin">

<div class="button-container">
  <a class="button" href="">Le Magasin</a>
</div>

<h3>
  <?= $page->titre_pour_tous() ?>
</h3>

<p>
  <?= $page->c_est_pour_qui() ?>
</p>

<div class="button-container">
  <a class="button" href="">Je participe à une réunion d'information</a>
</div>

<p>
  <?= $page->comment_ca_marche_1() ?>
</p>

<ol>
  <li>
    <?= $page->devenir_cooperateur_etape_1() ?>
  </li>
  <li>
    <?= $page->devenir_cooperateur_etape_2() ?>
  </li>
  <li>
    <?= $page->devenir_cooperateur_etape_3() ?>
  </li>
</ol>

<p>
  <?= $page->comment_ca_marche_2() ?>
</p>

<p>
  <?= $page->comment_ca_marche_3() ?>
</p>

<div class="button-container">
  <a class="button" href="">Je deviens coopérateur</a>
</div>

<img src="assets/images/illustration-devenir-cooperateur.png" alt="une autre photo du magasin">

<?php snippet('footer') ?>
