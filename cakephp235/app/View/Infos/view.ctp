<div class="infos view">
<h2><?php  echo __('Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($info['Info']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($info['Info']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info Categorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($info['InfoCategorie']['name'], array('controller' => 'info_categories', 'action' => 'view', $info['InfoCategorie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From'); ?></dt>
		<dd>
			<?php echo h($info['Info']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid To'); ?></dt>
		<dd>
			<?php echo h($info['Info']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($info['Info']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($info['Info']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>