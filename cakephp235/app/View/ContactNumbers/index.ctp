<div class="contactNumbers index">
	<h2><?php echo __('Kontakt-Nummern'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nr'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefonnummer'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig von'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig bis'); ?></th>
			<th><?php echo $this->Paginator->sort('Erstellt'); ?></th>
			<th><?php echo $this->Paginator->sort('Geändert'); ?></th>
			<th><?php echo $this->Paginator->sort('Kontakt'); ?></th>
			<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php foreach ($contactNumbers as $contactNumber): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($contactNumber['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $contactNumber['Contact']['id'])); ?>
		</td>
		<td><?php echo h($contactNumber['ContactNumber']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['valid_from']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['valid_to']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['created']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['modified']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['contact_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactNumber['ContactNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactNumber['ContactNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactNumber['ContactNumber']['id']), null, __('Are you sure you want to delete # %s?', $contactNumber['ContactNumber']['id'])); ?>
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