<div class="infoCategories index">
	<h2><?php echo __('Info Kategorien'); ?></h2>
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
	<?php foreach ($infoCategories as $infoCategory): ?>
	<tr>
		<td><?php echo h($infoCategory['InfoCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($infoCategory['InfoCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($infoCategory['InfoCategory']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($infoCategory['InfoCategory']['valid_to']); ?>&nbsp;</td>
		<td><?php echo h($infoCategory['InfoCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($infoCategory['InfoCategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $infoCategory['InfoCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $infoCategory['InfoCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $infoCategory['InfoCategory']['id']), null, __('Are you sure you want to delete # %s?', $infoCategory['InfoCategory']['id'])); ?>
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