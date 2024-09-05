<section class="features">
  <ul class="features__list">
    <?php foreach ($block->icons()->toFiles() as $icon): ?>
      <li class="features__item">
        <img src="<?= $icon->url() ?>" width="<?= $icon->width() ?>" height="<?= $icon->height() ?>">
        <p><?= $icon->feature_name() ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
