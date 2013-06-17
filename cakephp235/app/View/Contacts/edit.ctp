<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Kontakt bearbeiten'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('sort');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>