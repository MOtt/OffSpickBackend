<div class="categoryContacts index">
	<h2><?php echo __('Zuteilung Kategorien / Kontakte'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nr'); ?></th>
			<th><?php echo $this->Paginator->sort('Kontakt'); ?></th>
			<th><?php echo $this->Paginator->sort('Kategorie'); ?></th>
			<th><?php echo $this->Paginator->sort('Erstellt'); ?></th>
			<th><?php echo $this->Paginator->sort('Geändert'); ?></th>
			<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php foreach ($categoryContacts as $categoryContact): ?>
	<tr>
		<td><?php echo h($categoryContact['CategoryContact']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoryContact['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $categoryContact['Contact']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($categoryContact['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categoryContact['Category']['id'])); ?>
		</td>
		<td><?php echo h($categoryContact['CategoryContact']['created']); ?>&nbsp;</td>
		<td><?php echo h($categoryContact['CategoryContact']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoryContact['CategoryContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoryContact['CategoryContact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoryContact['CategoryContact']['id']), null, __('Are you sure you want to delete # %s?', $categoryContact['CategoryContact']['id'])); ?>
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