<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('Name');
		echo $this->Form->input('password');
		echo $this->Form->input('EMail');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('admin_user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
