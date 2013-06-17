<div class="newsMessages index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nr'); ?></th>
			<th><?php echo $this->Paginator->sort('Nachricht'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig von'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig bis'); ?></th>
			<th><?php echo $this->Paginator->sort('Erstellt'); ?></th>
			<th><?php echo $this->Paginator->sort('Geändert'); ?></th>
			<th><?php echo $this->Paginator->sort('Kategorie'); ?></th>
			<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php foreach ($newsMessages as $newsMessage): ?>
	<tr>
		<td><?php echo h($newsMessage['NewsMessage']['id']); ?>&nbsp;</td>
		<td><?php echo h($newsMessage['NewsMessage']['message']); ?>&nbsp;</td>
		<td><?php echo h($newsMessage['NewsMessage']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($newsMessage['NewsMessage']['valid_to']); ?>&nbsp;</td>
		<td><?php echo h($newsMessage['NewsMessage']['created']); ?>&nbsp;</td>
		<td><?php echo h($newsMessage['NewsMessage']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($newsMessage['NewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $newsMessage['NewsCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newsMessage['NewsMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newsMessage['NewsMessage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newsMessage['NewsMessage']['id']), null, __('Wollen Sie den Eintrag %s wirklich löschen?', $newsMessage['NewsMessage']['id'])); ?>
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