<div class="userGroups view">
<h2><?php  echo __('User Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validfrom'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['validfrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validto'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['validto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>