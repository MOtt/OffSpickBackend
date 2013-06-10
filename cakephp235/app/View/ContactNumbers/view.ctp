<div class="contactNumbers view">
<h2><?php  echo __('Contact Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactNumber['Contact']['id'], array('controller' => 'contacts', 'action' => 'view', $contactNumber['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidFrom'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['ValidFrom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValidTo'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['ValidTo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Number'), array('action' => 'edit', $contactNumber['ContactNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Number'), array('action' => 'delete', $contactNumber['ContactNumber']['id']), null, __('Are you sure you want to delete # %s?', $contactNumber['ContactNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
