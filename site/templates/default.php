<?php
/*
	The default template is used for any new page with no specific template associated
*/
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php snippet("head"); ?>
	</head>
	<body>
		<?php snippet("header"); ?>
		<main class="main">
			<article>
				<h1 class="h1"><?= $page->title()->esc() ?></h1>
				<div class="text">
					<?= $page->text()->kt() ?>
				</div>
			</article>
		</main>
		<?php snippet("footer"); ?>
		<?= js(["@auto"]) ?>
	</body>
</html>
