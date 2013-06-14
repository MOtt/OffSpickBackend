<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
		echo $this->Form->input('Sort');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
		echo $this->Form->input('ContactNumber_id');
		echo $this->Form->input('CategoryContact_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>