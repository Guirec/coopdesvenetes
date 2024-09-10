<section class="in-numbers">
	<div class="in-numbers__heading">
		<h1>
			La Coop en chiffres
		</h1>
	</div>
	<ul role="list" class="in-numbers__list">
    <?php foreach ($block->icons()->toFiles() as $icon): ?>
      <li class="in-numbers__item">
        <div class="in-numbers__item__top">
					<img src="<?= $icon->url() ?>" alt="" width="<?= $icon->width() ?>" height="<?= $icon->height() ?>" aria-hidden="true">
				</div>
				<div class="in-numbers__item__bottom">
        	<span class="in-numbers__number"><?= $icon->in_numbers_number() ?></span>
					<span class="in-numbers__text"><?= $icon->in_numbers_name() ?></span>
				</div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
