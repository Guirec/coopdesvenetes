<?php
/*
	Snippets are a great way to store code snippets for reuse
	or to keep your templates clean.

	This header snippet is reused in all templates.
	It fetches information from the `site.txt` content file
	and contains the site navigation.

	More about snippets:
	https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
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
		<?= css(["assets/css/styles.css", "@auto"]) ?>

		<?php
/*
			The `url()` helper is a great way to create reliable
			absolute URLs in Kirby that always start with the
			base URL of your site.
		*/
?>
		<link rel="shortcut icon" type="image/x-icon" href="<?= url("favicon.ico") ?>">
	</head>
<body>
	<header class="header">
		<a class="logo" href="<?= $site->url() ?>">
			<?php if ($logo = $site->file($site->logo())): ?>
				<?= $logo ?>
			<?php endif; ?>
		</a>

		<nav class="menu">
			<a <?php e(
   	$site->homePage()->isOpen(),
   	'aria-current="page"'
   ); ?> href="<?= $site->homePage()->url() ?>">Accueil</a>
			<?php
/*
				In the menu, we only fetch listed pages,
				i.e. the pages that have a prepended number
				in their foldername.

				We do not want to display links to unlisted
				`error`, `home`, or `sandbox` pages.

				More about page status:
				https://getkirby.com/docs/reference/panel/blueprints/page#statuses
			*/
?>
			<?php foreach ($site->children()->listed() as $item): ?>
			<a <?php e(
   	$item->isOpen(),
   	'aria-current="page"'
   ); ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
			<?php endforeach; ?>
			<?php snippet("social"); ?>
		</nav>
	</header>
	<main class="main">
