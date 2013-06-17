<div class="newsCategories form">
<?php echo $this->Form->create('NewsCategory'); ?>
	<fieldset>
		<legend><?php echo __('Kategorie bearbeiten'); ?></legend>
	<?php
		echo $this->Form->input('id', array('label' => 'Nr'));
		echo $this->Form->input('name', array('label' => 'Name'));
		echo $this->Form->input('valid_from', array('label' => 'Gültig von'));
		echo $this->Form->input('valid_to', array('label' => 'Gültig bis')); 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>