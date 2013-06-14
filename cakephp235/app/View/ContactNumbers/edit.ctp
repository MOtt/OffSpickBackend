<div class="contactNumbers form">
<?php echo $this->Form->create('ContactNumber'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact Number'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('Phone');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
