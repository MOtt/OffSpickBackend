<div class="infoCategories view">
<h2><?php  echo __('Info Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($infoCategory['InfoCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Info Messages'); ?></h3>
	<?php if (!empty($infoCategory['InfoMessage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Valid From'); ?></th>
		<th><?php echo __('Valid To'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Info Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($infoCategory['InfoMessage'] as $infoMessage): ?>
		<tr>
			<td><?php echo $infoMessage['id']; ?></td>
			<td><?php echo $infoMessage['message']; ?></td>
			<td><?php echo $infoMessage['valid_from']; ?></td>
			<td><?php echo $infoMessage['valid_to']; ?></td>
			<td><?php echo $infoMessage['created']; ?></td>
			<td><?php echo $infoMessage['modified']; ?></td>
			<td><?php echo $infoMessage['info_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'info_messages', 'action' => 'view', $infoMessage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'info_messages', 'action' => 'edit', $infoMessage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'info_messages', 'action' => 'delete', $infoMessage['id']), null, __('Are you sure you want to delete # %s?', $infoMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Info Message'), array('controller' => 'info_messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
