<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Kategorie bearbeiten'); ?></legend>
	<?php
		echo $this->Form->input('id', array('label' => 'Nr')); 
		echo $this->Form->input('name', array('label' => 'Name')); 
		echo $this->Form->input('description', array('label' => 'Beschreibung')); 
		echo $this->Form->input('sort', array('label' => 'Sortierung')); 
		echo $this->Form->input('valid_from', array('label' => 'Gültig von')); 
		echo $this->Form->input('valid_to', array('label' => 'Gültig bis')); 
		echo $this->Form->input('Contact', array('label' => 'Kontakte')); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>
