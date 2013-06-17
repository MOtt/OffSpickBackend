<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Benutzer hinzufügen'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Benutzername'));
		echo $this->Form->input('Name', array('label' => 'Name'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('EMail', array('label' => 'EMail'));
		echo $this->Form->input('ValidFrom', array('label' => 'Gültig von'));
		echo $this->Form->input('ValidTo', array('label' => 'Gültig bis'));
		echo $this->Form->input('user_group_id', array('label' => 'Benutzergruppe'));
		echo $this->Form->input('admin_user', array('label' => 'Admin-Benutzer'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>
