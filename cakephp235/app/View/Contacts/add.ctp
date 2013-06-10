<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Sort');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>