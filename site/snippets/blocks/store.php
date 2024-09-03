<div class="store">

  <?php if ($image = $block->store_image()->toFile()): ?>
  <?php endif; ?>
  <div class="store-details">
    <div class="store-heading heading-1">
      <?= $block->heading() ?>
    </div>
    <div class="store-text">
      <?= $block->store_description()->kirbytext() ?>
    </div>
    <a class="push-down" href="<?= $block->link() ?>">
      <div class="button">
        <p><?= $block->button_text() ?> </p>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z" fill="currentColor"/>
        </svg>
      </div>
    </a>
  </div>
		<div class="store-image">
			<img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
		</div>
</div>
