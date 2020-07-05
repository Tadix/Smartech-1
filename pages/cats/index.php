<div class="cats">
	<h4>TOUTES LES CATÉGORIES</h4>
	<hr>
	<ul>
		<?php foreach (App::getInstance()->getTable('Cat')->all() as $cat): ?>
		<a href="<?= $cat->url; ?>">
			<li>
				<h3><?= $cat->nom; ?></h3>
				<p>Check out <?= $cat->nom; ?> games.</p>
			</li>
		</a>
		<?php endforeach; ?>
	</ul>
</div>