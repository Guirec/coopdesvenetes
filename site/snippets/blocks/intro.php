<div class="introduction">
  <div class="introduction-heading heading-1">
    <?= $block->heading() ?>
  </div>
  <ul role="list" class="introduction-info">
    <li class="introduction-details">
      <?php if ($icon = $block->address_icon()->toFile()): ?>
        <img src="<?= $icon->url() ?>" alt="">
      <?php endif; ?>
      <p><?= $block->address() ?></p>
    </li>
    <li class="introduction-details">
      <?php if ($icon = $block->opening_times_icon()->toFile()): ?>
          <img src="<?= $icon->url() ?>" alt="">
      <?php endif; ?>
      <p><?= $block->opening_times() ?></p>
    </li>
  </ul>
</div>
