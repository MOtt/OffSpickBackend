<div class="infoMessages index">
	<h2><?php echo __('Infos 	'); ?></h2>
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
	<?php foreach ($infoMessages as $infoMessage): ?>
	<tr>
		<td><?php echo h($infoMessage['InfoMessage']['id']); ?>&nbsp;</td>
		<td><?php echo h($infoMessage['InfoMessage']['message']); ?>&nbsp;</td>
		<td><?php echo h($infoMessage['InfoMessage']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($infoMessage['InfoMessage']['valid_to']); ?>&nbsp;</td>
		<td><?php echo h($infoMessage['InfoMessage']['created']); ?>&nbsp;</td>
		<td><?php echo h($infoMessage['InfoMessage']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($infoMessage['InfoCategory']['name'], array('controller' => 'info_categories', 'action' => 'view', $infoMessage['InfoCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $infoMessage['InfoMessage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $infoMessage['InfoMessage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $infoMessage['InfoMessage']['id']), null, __('Are you sure you want to delete # %s?', $infoMessage['InfoMessage']['id'])); ?>
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