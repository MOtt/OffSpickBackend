<div class="userGroups view">
<h2><?php  echo __('Benutzergruppe'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['validfrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['validto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Zugeteilte Benutzer'); ?></h3>
	<?php if (!empty($userGroup['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nr'); ?></th>
		<th><?php echo __('Benutzername'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('EMail'); ?></th>
		<th><?php echo __('Gültig von'); ?></th>
		<th><?php echo __('Gültig bis'); ?></th>
		<th><?php echo __('Erstellt'); ?></th>
		<th><?php echo __('Geändert'); ?></th>
		<th><?php echo __('Admin-Benutzer'); ?></th>
		<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['Name']; ?></td>
			<td><?php echo $user['EMail']; ?></td>
			<td><?php echo $user['ValidFrom']; ?></td>
			<td><?php echo $user['ValidTo']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['admin_user']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
