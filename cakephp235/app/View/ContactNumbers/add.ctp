<div class="contactNumbers form">
<?php echo $this->Form->create('ContactNumber'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact Number'); ?></legend>
	<?php
		echo $this->Form->input('contact_id');
		echo $this->Form->input('Phone');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contact Numbers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
