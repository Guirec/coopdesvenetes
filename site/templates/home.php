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
<?= snippet('header') ?>
<?= snippet('intro') ?>
<?php
  /*
    We always use an if-statement to check if a page exists to
    prevent errors in case the page was deleted or renamed before
    we call a method like `children()` in this case
  */
?>

<p>
  <?= $page->intro() ?>
</p>



<?= $page->file($page->image_filename_1()) ?>

<h3>
  <?= $page->titre_magasin() ?>
</h3>

<p>
  <?= $page->c_est_quoi_1() ?>
</p>



<ul class="picto-selection-produits">
  <?php foreach($page->find('pictos')->images() as $file): ?>
    <li>
      <?= $file ?>
    </li>
    <?php endforeach ?>
</ul>

<!-- <ul class="picto-selection-produits">
  <li><img src="assets/icons/picto-local.png" alt="picto local"></li>
  <li><img src="assets/icons/picto-bio.png" alt="picto bio"></li>
  <li><img src="assets/icons/picto-saison.png" alt="picto saison"></li>
  <li><img src="assets/icons/picto-emballage.png" alt="picto emballage"></li>
  <li><img src="assets/icons/picto-humain.png" alt="picto humain"></li>
</ul> -->

<h3>
  <?= $page->titre_communaute() ?>
</h3>

<p>
  <?= $page->c_est_quoi_2() ?>
</p>

<?= $page->file($page->image_filename_2()) ?>

<div class="button-container">
  <a class="button" href=""><?= $page->button_name_1() ?></a>
</div>

<h3>
  <?= $page->titre_engagements() ?>
</h3>

<p>
  <?= $page->c_est_quoi_3() ?>
</p>

<img src="assets/images/photo-magasin-2.png" alt="une autre photo du magasin">

<div class="button-container">
  <a class="button" href=""><?= $page->button_name_2() ?></a>
</div>

<h3>
  <?= $page->titre_pour_qui() ?>
</h3>

<p>
  <?= $page->c_est_pour_qui() ?>
</p>

<div class="button-container">
  <a class="button" href=""><?= $page->button_name_3() ?></a>
</div>

<h3>
  <?= $page->titre_fonctionnement() ?>
</h3>
<p>
  <?= $page->comment_ca_marche_1() ?>
</p>


<!-- <?= $page->steps() ?> -->

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
  <a class="button" href=""><?= $page->button_name_4() ?></a>
</div>

<img src="assets/images/illustration-devenir-cooperateur.png" alt="une autre photo du magasin">

<?= snippet('footer') ?>
