<div class="contactNumbers form">
<?php echo $this->Form->create('ContactNumber'); ?>
	<fieldset>
		<legend><?php echo __('Kontakt-Nummer hinzufügen'); ?></legend>
	<?php
		echo $this->Form->input('phone', array('label' => 'Telefonnummer')); 
		echo $this->Form->input('valid_from', array('label' => 'Gültig von')); 
		echo $this->Form->input('valid_to', array('label' => 'Gültig bis')); 
		echo $this->Form->input('contact_id', array('label' => 'Kontaktname')); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>