<div class="introduction">
  <div class="introduction__heading heading-1">
    <?= $block->heading() ?>
  </div>
  <ul role="list" class="introduction__info">
    <li class="introduction__details">
      <?php if ($icon = $block->address_icon()->toFile()): ?>
        <img src="<?= $icon->url() ?>" alt="">
      <?php endif; ?>
      <?= $block->address()->kirbytext() ?>
    </li>
    <li class="introduction__details">
      <?php if ($icon = $block->opening_times_icon()->toFile()): ?>
          <img src="<?= $icon->url() ?>" alt="">
      <?php endif; ?>
      <?= $block->opening_times()->kirbytext() ?>
    </li>
  </ul>
</div>
