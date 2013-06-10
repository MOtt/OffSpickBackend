<div class="contacts view">
<h2><?php  echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['Sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidFrom'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['ValidFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidTo'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['ValidTo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Numbers'), array('controller' => 'contact_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Number'), array('controller' => 'contact_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>