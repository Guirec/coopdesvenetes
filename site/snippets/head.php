<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<?php
/*
	In the title tag we show the title of our
	site and the title of the current page
*/
?>
<title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

<?php
/*
	Stylesheets can be included using the `css()` helper.
	Kirby also provides the `js()` helper to include script file.
	More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
*/
?>
<?= css(['assets/css/styles.css', '@auto']) ?>
<?= js(['assets/js/main-navigation.js', '@auto'], true) ?>

<?php
/*
	The `url()` helper is a great way to create reliable
	absolute URLs in Kirby that always start with the
	base URL of your site.
*/
?>
<link rel="shortcut icon" type="image/x-icon" href="<?= url("favicon.ico") ?>">
