<div class="infoMessages view">
<h2><?php  echo __('Info Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($infoMessage['InfoMessage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infoMessage['InfoCategory']['name'], array('controller' => 'info_categories', 'action' => 'view', $infoMessage['InfoCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>