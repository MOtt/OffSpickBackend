<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Kontakt hinzufügen'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Name')); 
		echo $this->Form->input('description', array('label' => 'Beschreibung')); 
		echo $this->Form->input('sort', array('label' => 'Sortierung')); 
		echo $this->Form->input('valid_from', array('label' => 'Gültig von')); 
		echo $this->Form->input('valid_to', array('label' => 'Gültig bis')); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>