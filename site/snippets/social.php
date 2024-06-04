<?php
/*
	Snippets are a great way to store code snippets for reuse
	or to keep your templates clean.

	In this snippet the svg() helper is a great way to embed SVG
	code directly in your HTML. Pass the path to your SVG
	file to load it.

	More about snippets:
	https://getkirby.com/docs/guide/templates/snippets
*/
?>
<span class="social">
	<a href="https://www.facebook.com/coopdesvenetes/" aria-label="Suivez-nous sur Facebook">
		<?= svg("assets/icons/facebook.svg") ?>
	</a>
	<a href="https://www.instagram.com/coop_des_venetes/" aria-label="Suivez-nous sur Instagram">
		<?= svg("assets/icons/instagram.svg") ?>
	</a>
</span>
