<div class="contactNumbers index">
	<h2><?php echo __('Contact Numbers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone'); ?></th>
			<th><?php echo $this->Paginator->sort('ValidFrom'); ?></th>
			<th><?php echo $this->Paginator->sort('ValidTo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactNumbers as $contactNumber): ?>
	<tr>
		<td><?php echo h($contactNumber['ContactNumber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactNumber['Contact']['id'], array('controller' => 'contacts', 'action' => 'view', $contactNumber['Contact']['id'])); ?>
		</td>
		<td><?php echo h($contactNumber['ContactNumber']['Phone']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['ValidFrom']); ?>&nbsp;</td>
		<td><?php echo h($contactNumber['ContactNumber']['ValidTo']); ?>&nbsp;</td>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contact Number'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
