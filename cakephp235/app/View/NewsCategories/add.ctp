<div class="newsCategories form">
<?php echo $this->Form->create('NewsCategory'); ?>
	<fieldset>
		<legend><?php echo __('Kategorie hinzufügen'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Name'));
		echo $this->Form->input('valid_from', array('label' => 'Gültig bis')); 
		echo $this->Form->input('valid_to', array('label' => 'Gültig von')); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>