<div class="users index">
	<h2><?php echo __('Benutzer'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Nr'); ?></th>
			<th><?php echo $this->Paginator->sort('Benutzername'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('EMail'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig von'); ?></th>
			<th><?php echo $this->Paginator->sort('Gültig bis'); ?></th>
			<th><?php echo $this->Paginator->sort('Benutzergruppe'); ?></th>
			<th><?php echo $this->Paginator->sort('Erstellt'); ?></th>
			<th><?php echo $this->Paginator->sort('Geändert'); ?></th>
			<th><?php echo $this->Paginator->sort('Admin-Benutzer'); ?></th>
			<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['Name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['EMail']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ValidFrom']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ValidTo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['admin_user']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
</div>
