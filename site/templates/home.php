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

<h3>
  <?= $page->shop_title() ?>
</h3>

<p>
  <?= $page->shop_text() ?>
</p>

<ul class="shop-icons">
  <?php foreach($page->find('shop_icons')->images() as $file): ?>
    <li>
      <?= $file ?>
    </li>
    <?php endforeach ?>
</ul>

<h3>
  <?= $page->community_title() ?>
</h3>

<p>
  <?= $page->community_text() ?>
</p>

<?= $page->file($page->community_image_filename()) ?>

<div class="button-container">
  <a class="button" href=""><?= $page->community_button_name() ?></a>
</div>

<h3>
  <?= $page->commitment_title() ?>
</h3>

<p>
  <?= $page->community_text() ?>
</p>

<?= $page->file($page->commitment_image_filename()) ?>

<div class="button-container">
  <a class="button" href=""><?= $page->community_button_name() ?></a>
</div>

<h3>
  <?= $page->for_who_title() ?>
</h3>

<p>
  <?= $page->for_who_text() ?>
</p>

<div class="button-container">
  <a class="button" href=""><?= $page->for_who_button_name() ?></a>
</div>

<h3>
  <?= $page->cooperator_title() ?>
</h3>
<p>
  <?= $page->cooperator_start_text() ?>
</p>

<ol>
  <li>
    <?= $page->cooperator_step_1() ?>
  </li>
  <li>
    <?= $page->cooperator_step_2() ?>
  </li>
  <li>
    <?= $page->cooperator_step_3() ?>
  </li>
</ol>

<p>
  <?= $page->cooperator_middle_text() ?>
</p>

<p>
  <?= $page->cooperator_end_text() ?>
</p>


<div class="button-container">
  <a class="button" href=""><?= $page->cooperator_button_name() ?></a>
</div>

<?= $page->file($page->cooperator_image_filename()) ?>

<?= snippet('footer') ?>
