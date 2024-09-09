<section class="features">
  <ul role="list" class="features__list">
    <?php foreach ($block->icons()->toFiles() as $icon): ?>
      <li class="features__item">
        <img src="<?= $icon->url() ?>" alt="" width="<?= $icon->width() ?>" height="<?= $icon->height() ?>" aria-hidden="true">
        <span class="features__name"><?= $icon->feature_name() ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
