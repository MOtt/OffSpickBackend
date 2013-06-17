<div class="userGroups form">
<?php echo $this->Form->create('UserGroup'); ?>
	<fieldset>
		<legend><?php echo __('Benutzergruppe hinzufügen'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Name'));
		echo $this->Form->input('validfrom', array('label' => 'Gültig von'));
		echo $this->Form->input('validto', array('label' => 'Gültig bis'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>