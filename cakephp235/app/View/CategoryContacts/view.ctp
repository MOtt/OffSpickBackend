<div class="categoryContacts view">
<h2><?php  echo __('Category Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryContact['Contact']['id'], array('controller' => 'contacts', 'action' => 'view', $categoryContact['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryContact['Category']['id'], array('controller' => 'categories', 'action' => 'view', $categoryContact['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Contact'), array('action' => 'edit', $categoryContact['CategoryContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Contact'), array('action' => 'delete', $categoryContact['CategoryContact']['id']), null, __('Are you sure you want to delete # %s?', $categoryContact['CategoryContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
