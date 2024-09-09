<div class="how-it-works">
	<div class="how-it-works__heading">
		<h1>
			<?= $block->heading() ?>
		</h1>
		<div class="subheading">
			<?= $block->subheading() ?>
		</div>
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
				<div class="how-it-works_blocks__item__heading"><?= $block->top_left_block_heading()->kirbytextinline() ?></div>
				<p><?= $block->top_left_block_text() ?></p>
			</div>
			<div class="how-it-works__blocks__item how-it-works__blocks__top how-it-works__blocks__right">
				<div class="how-it-works_blocks__item__heading"><?= $block->top_right_block_heading()->kirbytextinline() ?></div>
				<p><?= $block->top_right_block_text() ?></p>
			</div>
		</div>
		<div class="how-it-works__blocks__bottom">
			<div class="how-it-works__blocks__item how-it-works__blocks__bottom how-it-works__blocks__left">
				<div class="how-it-works_blocks__item__heading"><?= $block->bottom_left_block_heading()->kirbytextinline() ?></div>
				<p><?= $block->bottom_left_block_text() ?></p>
			</div>
			<div class="how-it-works__blocks__item how-it-works__blocks__bottom how-it-works__blocks__right">
				<div class="how-it-works_blocks__item__heading"><?= $block->bottom_right_block_heading()->kirbytextinline() ?></div>
				<p><?= $block->bottom_right_block_text() ?></p>
			</div>
		</div>
	</div>
</div>
