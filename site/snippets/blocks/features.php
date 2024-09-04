<div class="features">
  <?php foreach ($block->icons()->toFiles() as $icon): ?>
    <div class="feature <?= $icon->shape() ?>">
      <?= $icon ?>
      <p><?= $icon->feature_name() ?></p>
  </div>
  <?php endforeach ?>
</div>
