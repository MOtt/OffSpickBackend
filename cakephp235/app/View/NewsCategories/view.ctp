<div class="newsCategories view">
<h2><?php  echo __('News Kategorie'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($newsCategory['NewsCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><br><?php echo __('Zugeteilte News'); ?></h3>
	<?php if (!empty($newsCategory['NewsMessage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nachricht'); ?></th>
		<th><?php echo __('Gültig von'); ?></th>
		<th><?php echo __('Gültig bis'); ?></th>
		<th><?php echo __('Erstellt'); ?></th>
		<th><?php echo __('Geändert'); ?></th>
		<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($newsCategory['NewsMessage'] as $newsMessage): ?>
		<tr>
			<td><?php echo $newsMessage['id']; ?></td>
			<td><?php echo $newsMessage['message']; ?></td>
			<td><?php echo $newsMessage['valid_from']; ?></td>
			<td><?php echo $newsMessage['valid_to']; ?></td>
			<td><?php echo $newsMessage['created']; ?></td>
			<td><?php echo $newsMessage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news_messages', 'action' => 'view', $newsMessage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news_messages', 'action' => 'edit', $newsMessage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news_messages', 'action' => 'delete', $newsMessage['id']), null, __('Are you sure you want to delete # %s?', $newsMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
