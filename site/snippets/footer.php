<?php
/*
	Snippets are a great way to store code snippets for reuse
	or to keep your templates clean.

	This footer snippet is reused in all templates.

	More about snippets:
	https://getkirby.com/docs/guide/templates/snippets
*/
?>
	</main>

	<footer class="footer">
		<div class="grid">
			<div class="column" style="--columns: 2">
				<h2>Restez informés grâce à la feuille de chou</h2>
				<p>
					formulaire d'abonnement à la newsletter
				</p>
			</div>

			<div class="column" style="--columns: 5">
				<?php snippet("horaires"); ?>
				<br>
				<h2>Infos aux livreur·euse·s</h2>
				<img src="assets/icons/picto-livraison.png" alt="picto camion de livraison" style="width: 50px">
				<p>
					Horaires de livraison : du lundi au samedi de 9h30 à 12h30
				</p>
			</div>
			<div class="column" style="--columns: 2">
				<h2>Pages</h2>
				<ul>
					<?php foreach ($site->children()->listed() as $example): ?>
						<li><a href="<?= $example->url() ?>"><?= $example->title()->esc() ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="column" style="--columns: 3">
				<h2>Nous trouver</h2>
				<img src="assets/images/plan-300x112.png" alt="plan d'accès à la Coop" style="width: 300px">
				<p>
					Adresse: 3 rue de Lorraine 56860 Séné
				</p>
				<p>
					Tel:  02 90 73 89 72
				</p>
			</div>
		</div>
	</footer>

	<?= js([
 	"assets/js/prism.js",
 	"assets/js/lightbox.js",
 	"assets/js/index.js",
 	"@auto",
 ]) ?>

</body>
</html>
