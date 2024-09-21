<header class="header">
	<div class="header__inner">
		<div class="header__content">
			<a class="logo" href="<?= $site->url() ?>">
				<?php if ($logo = asset('assets/images/logo.svg')): ?>
					<img src="<?= $logo->url() ?>" alt="<?= $site->title() ?>" width="<?= $logo->width() ?>" height="<?= $logo->height() ?>">
				<?php else: ?>
					<?= $site->title()->esc() ?>
				<?php endif; ?>
			</a>

			<main-navigation class="main-navigation">
				<button class="main-navigation__trigger" aria-label="Ouvrir / Fermer le menu" aria-expanded="false" aria-controls="menu" data-menu-trigger>
					<span>Menu</span>
				</button>

				<nav class="main-navigation__menu" id="menu" data-menu-nav>
					<ul class="main-navigation__list" role="menubar" data-menu-list>
						<li class="main-navigation__item" role="none">
							<a class="main-navigation__link" <?php e(
								$site->homePage()->isOpen(),
								'aria-current="page"'
							); ?> href="<?= $site->homePage()->url() ?>" role="menuitem">Accueil</a>
						</li>
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
							<li class="main-navigation__item" role="none">
								<a class="main-navigation__link" <?php e(
									$item->isOpen(),
									'aria-current="page"'
								); ?> href="<?= $item->url() ?>" role="menuitem"><?= $item->title()->esc() ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</main-navigation>
		</div>
	</div>
</header>
