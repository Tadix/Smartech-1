<div class="posts">
	<h4>TOUT LES JEUX</h4>
	<hr>
	<div class="post">
		<?php foreach (App::getInstance()->getTable('Game')->showAll() as $game): ?>
		<div onmouseover="showMore($(this))" onmouseout="showLess($(this))" class="inner-post">
			<a alt="<?= $game->titre; ?>" href="<?= $game->url; ?>"><div class="img-show" style="background-image: url('<?= $game->img; ?>')"></div></a>
			<div class="details">
				<div class="head">
					<h5><a class="img-a" alt="<?= $game->titre; ?>" href="<?= $game->url; ?>"><?= $game->getTitre(); ?></a></h5>
                    <div class="cats">
                    <?php
                    $platsName = explode(',',$game->platform);
                    foreach($platsName as $plat) {
                        echo "<a href=\"" . App::getInstance()->getTable('Platform')->platIdByName($plat)->url . "\" class=\"cat\" alt=\"" . $plat . "\" >" . $plat . "</a>";
                    }
                    ?>
                    </div>
				</div>
				<div id="tail" class="tail">
					<?= $game->ext; ?>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
