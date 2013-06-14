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