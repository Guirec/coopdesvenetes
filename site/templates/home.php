<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php snippet("head"); ?>
	</head>
	<body>
		<?php snippet("header"); ?>

		<?= $page->blocks()->toBlocks() ?>

		<?php snippet("footer"); ?>
	</body>
</html>
