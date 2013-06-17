<div class="newsMessages view">
<h2><?php  echo __('News'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nachricht'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($newsMessage['NewsMessage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newsMessage['NewsCategory']['name'], array('controller' => 'news_categories', 'action' => 'view', $newsMessage['NewsCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>