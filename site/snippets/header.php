<header class="header">
	<div class="wrapper">
		<div class="header__inner">
			<a class="header__logo" href="<?= $site->url() ?>">
				<?php if ($logo = asset('assets/images/logo.svg')): ?>
					<img src="<?= $logo->url() ?>" alt="<?= $site->title() ?>" width="<?= $logo->width() ?>" height="<?= $logo->height() ?>">
				<?php else: ?>
					<?= $site->title()->esc() ?>
				<?php endif; ?>
			</a>

			<main-navigation>
				<button id="menu-trigger" class="header__toggle" aria-label="Navigation menu" aria-expanded="false" aria-controls="menu">
					<span>Menu</span>
				</button>

				<nav class="header__navigation" id="menu">
					<ul class="header__navigation__list" role="menubar">
						<li class="header__navigation__item" role="none">
							<a class="header__navigation__link" <?php e(
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
							<li class="header__navigation__item" role="none">
								<a class="header__navigation__link" <?php e(
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
