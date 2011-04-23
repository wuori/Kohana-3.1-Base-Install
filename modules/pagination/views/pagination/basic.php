<ul class="pagination">

	<?php if ($first_page !== FALSE): ?>
		<li><a href="<?php echo $page->url($first_page) ?>" rel="first"><?php echo __('First') ?></a></li>
	<?php else: ?>
		<li><?php echo __('First') ?></li>
	<?php endif ?>


	<?php if ($previous_page !== FALSE): ?>
		<li><a href="<?php echo $page->url($previous_page) ?>">&laquo;</a></li>
	<?php else: ?>
		<li>&laquo;</li>
	<?php endif ?>


	<?php if ($total_pages < 13): /* ‚ Previous  1 2 3 4 5 6 7 8 9 10 11 12  Next é */ ?>

		<?php for ($i = 1; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="current"><?php echo $i ?></li>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a></li>
			<?php endif ?>
		<?php endfor ?>

	<?php elseif ($current_page < 9): /* ‚ Previous  1 2 3 4 5 6 7 8 9 10 ƒ 25 26  Next é */ ?>

		<?php for ($i = 1; $i <= 10; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="current"><?php echo $i ?></li>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a>
			<?php endif ?>
		<?php endfor ?>

		<li>&hellip;</li>
		<li><a href="<?php echo $page->url($total_pages-1) ?>"><?php echo $total_pages - 1 ?></a>
		<li><a href="<?php echo $page->url($total_pages) ?>"><?php echo $total_pages ?></a>

	<?php elseif ($current_page > $total_pages - 8): /* ‚ Previous  1 2 ƒ 17 18 19 20 21 22 23 24 25 26  Next é */ ?>

		<li><a href="<?php echo $page->url(1) ?>">1</a></li>
		<li><a href="<?php echo $page->url(2) ?>">2</a></li>
		<li>&hellip;</li>

		<?php for ($i = $total_pages - 9; $i <= $total_pages; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="current"><?php echo $i ?></li>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a></li>
			<?php endif ?>
		<?php endfor ?>

	<?php else: /* ‚ Previous  1 2 ƒ 5 6 7 8 9 10 11 12 13 14 ƒ 25 26  Next é */ ?>

		<li><a href="<?php echo $page->url(1) ?>">1</a></li>
		<li><a href="<?php echo $page->url(2) ?>">2</a></li>
		<li>&hellip;</li>

		<?php for ($i = $current_page - 5; $i <= $current_page + 2; $i++): ?>
			<?php if ($i == $current_page): ?>
				<li class="current"><?php echo $i ?></li>
			<?php else: ?>
				<li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a></li>
			<?php endif ?>
		<?php endfor ?>

		<li>&hellip;</li>
		<li><a href="<?php echo $page->url($total_pages-1) ?>"><?php echo $total_pages - 1 ?></a>
		<li><a href="<?php echo $page->url($total_pages) ?>"><?php echo $total_pages ?></a>

	<?php endif ?>


	<?php if ($next_page !== FALSE): ?>
		<li><a href="<?php echo $page->url($next_page) ?>">&raquo;</a></li>
	<?php else: ?>
		<li>&raquo;</li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li><a href="<?php echo $page->url($last_page) ?>" rel="first"><?php echo __('Last') ?></a></li>
	<?php else: ?>
		<li><?php echo __('Last') ?></li>
	<?php endif ?>
</ul>