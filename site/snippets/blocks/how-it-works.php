<div class="how-it-works">
	<div class="how-it-works__heading">
		<h2 class="heading-1">
			<?= $block->heading() ?>
		</h2>
		<p>
			<?= $block->subheading() ?>
		</p>
	</div>
	<div class="how-it-works__blocks">
		<svg class="flt_svg" xmlns="http://www.w3.org/2000/svg">
			<defs>
				<filter id="flt_tag">
					<feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="flt_tag" />
					<feComposite in="SourceGraphic" in2="flt_tag" operator="atop"/>
				</filter>
			</defs>
		</svg>
		<div class="how-it-works__blocks__top">
			<div class="how-it-works__blocks__item how-it-works__blocks__top how-it-works__blocks__left">
				<strong class="how-it-works_blocks__heading"><?= $block->top_left_block_heading()->kirbytextinline() ?></strong>
				<p><?= $block->top_left_block_text() ?></p>
			</div>
			<div class="how-it-works__blocks__item how-it-works__blocks__top how-it-works__blocks__right">
				<strong class="how-it-works_blocks__heading"><?= $block->top_right_block_heading()->kirbytextinline() ?></strong>
				<p><?= $block->top_right_block_text() ?></p>
			</div>
		</div>
		<div class="how-it-works__blocks__bottom">
			<div class="how-it-works__blocks__item how-it-works__blocks__bottom how-it-works__blocks__left">
				<strong class="how-it-works_blocks__heading"><?= $block->bottom_left_block_heading()->kirbytextinline() ?></strong>
				<p><?= $block->bottom_left_block_text() ?></p>
			</div>
			<div class="how-it-works__blocks__item how-it-works__blocks__bottom how-it-works__blocks__right">
				<strong class="how-it-works_blocks__heading"><?= $block->bottom_right_block_heading()->kirbytextinline() ?></strong>
				<p><?= $block->bottom_right_block_text() ?></p>
			</div>
		</div>
	</div>
</div>
