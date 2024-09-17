<div class="store">
	<?php if ($image = $block->store_image()->toFile()): ?>
		<div class="store__image">
			<img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
		</div>
	<?php endif; ?>
	<div class="store__details">
		<div class="heading-1">
			<?= $block->heading() ?>
		</div>
		<p>
			<?= $block->store_description()->kirbytext() ?>
		</p>
		<div class="push-down">
			<a class="button" href="<?= $block->link() ?>">
				<?= $block->button_text() ?>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"/>
				</svg>
			</a>
		</div>
	</div>
</div>
