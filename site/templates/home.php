<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php snippet("head"); ?>
	</head>
	<body class="wrapper">
		<?php snippet("header"); ?>

		<?= $page->blocks()->toBlocks() ?>

		<?php snippet("footer"); ?>
	</body>
</html>
