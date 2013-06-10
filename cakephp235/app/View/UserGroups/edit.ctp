<div class="userGroups form">
<?php echo $this->Form->create('UserGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('validfrom');
		echo $this->Form->input('validto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
