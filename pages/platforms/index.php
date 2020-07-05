<div class="cats">
	<h4>TOUTES LES PLATEFORMES</h4>
	<hr>
	<ul>
		<?php foreach (App::getInstance()->getTable('Platform')->all() as $plat): ?>
		<a href="<?= $plat->url; ?>">
			<li>
				<div class="img-plat" style="background-image: url('<?= $plat->img; ?>');"></div>
				<h3><?= $plat->nom; ?></h3>
				<p>Check out <?= $plat->nom; ?> games.</p>
			</li>
		</a>
		<?php endforeach; ?>
	</ul>
</div>