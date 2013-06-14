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
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['CategoryContact']['contact_id'], array('controller' => 'category_contacts', 'action' => 'view', $contact['CategoryContact']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>