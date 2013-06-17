<div class="users view">
<h2><?php  echo __('Benutzer'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Benutzername'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMail'); ?></dt>
		<dd>
			<?php echo h($user['User']['EMail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($user['User']['ValidFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($user['User']['ValidTo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Benutzergruppe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin-Benutzer'); ?></dt>
		<dd>
			<?php echo h($user['User']['admin_user']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
