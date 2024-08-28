<div class="introduction">
  <div class="introduction-heading">
    <h2>
      <?= $block->heading() ?>
    </h2>
  </div>
  <div class="introduction-info">
    <div class="introduction-details introduction-address">
      <?php if($icon = $block->address_icon()->toFile()): ?>
        <img src="<?= $icon->url() ?>" alt="">
      <?php endif ?>
      <p><?= $block->address() ?></p>
    </div>
    <div class="introduction-details introduction-opening-times">
      <?php if($icon = $block->opening_times_icon()->toFile()): ?>
          <img src="<?= $icon->url() ?>" alt="">
      <?php endif ?>
      <p><?= $block->opening_times() ?></p>
    </div>
  </div>
</div>
