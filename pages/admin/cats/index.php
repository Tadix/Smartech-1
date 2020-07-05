<?php

$cats = App::getInstance()->getTable('Cat')->all();
$adminForm = new \App\HTML\AdminForm();

echo $adminForm->header("cats");
echo $adminForm->tableHead();
foreach($cats as $cat): ?>
<tr>
	<td class="left"><a href="<?= $cat->url; ?>"><?= $cat->nom; ?></a></td>
	<td class="acts">
		<a class="edit" href="?p=cats.edit&id=<?= $cat->id; ?>">Modifier</a>
		<form action="?p=cats.delete" method="post"  onsubmit="return confirm('Voulez-vous vraiment supprimer cette catégorie ?');">
			<input type="hidden" name="id" value="<?= $cat->id; ?>">
			<button class="delete" type="submit">Supprimer</button>
		</form>
				
	</td>
</tr>
<?php 
endforeach;
echo $adminForm->tableFooter();