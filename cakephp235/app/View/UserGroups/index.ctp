<div class="userGroups index">
	<h2><?php echo __('User Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('validfrom'); ?></th>
			<th><?php echo $this->Paginator->sort('validto'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userGroups as $userGroup): ?>
	<tr>
		<td><?php echo h($userGroup['UserGroup']['id']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['name']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['validfrom']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['validto']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['created']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userGroup['UserGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?>
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