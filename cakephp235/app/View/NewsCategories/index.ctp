<div class="newsCategories index">
	<h2><?php echo __('News Kategorien'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nr'); ?></th>
			<th><?php echo $this->Paginator->sort('Kategorie'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig von'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig bis'); ?></th>
			<th><?php echo $this->Paginator->sort('Erstellt'); ?></th>
			<th><?php echo $this->Paginator->sort('Geändert'); ?></th>
			<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php foreach ($newsCategories as $newsCategory): ?>
	<tr>
		<td><?php echo h($newsCategory['NewsCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['valid_to']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($newsCategory['NewsCategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newsCategory['NewsCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newsCategory['NewsCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newsCategory['NewsCategory']['id']), null, __('Möchten Sie die Kategorie <%s> wirklich löschen?', $newsCategory['NewsCategory']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Seite {:page} von {:pages}, {:current} Datensätze von {:count} , Anzeige von {:start} bis {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('vorherige'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('nächste') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>