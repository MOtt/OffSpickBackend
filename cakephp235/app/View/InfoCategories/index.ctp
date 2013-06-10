<div class="infoCategories index">
	<h2><?php echo __('Info Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_from'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_to'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
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
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>