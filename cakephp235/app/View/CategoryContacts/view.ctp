<div class="categoryContacts view">
<h2><?php  echo __('Category Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['contact_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryContact['Category']['id'], array('controller' => 'categories', 'action' => 'view', $categoryContact['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>