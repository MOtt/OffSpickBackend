<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('Name');
		echo $this->Form->input('password');
		echo $this->Form->input('EMail');
		echo $this->Form->input('ValidFrom');
		echo $this->Form->input('ValidTo');
		echo $this->Form->input('IP');
		echo $this->Form->input('usergroup_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usergroups'), array('controller' => 'usergroups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usergroup'), array('controller' => 'usergroups', 'action' => 'add')); ?> </li>
	</ul>
</div>
