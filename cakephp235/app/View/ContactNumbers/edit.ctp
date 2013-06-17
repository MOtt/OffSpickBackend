<div class="contactNumbers form">
<?php echo $this->Form->create('ContactNumber'); ?>
	<fieldset>
		<legend><?php echo __('Kontakt-Nummer bearbeiten'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('phone');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
		echo $this->Form->input('contact_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>