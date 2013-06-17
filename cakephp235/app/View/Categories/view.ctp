<div class="categories view">
<h2><?php  echo __('Kategorie'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beschreibung'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($category['Category']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($category['Category']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Zugeteilte Kontakte'); ?></h3>
	<?php if (!empty($category['Contact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nr'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Beschreibung'); ?></th>
		<th><?php echo __('Sortierung'); ?></th>
		<th><?php echo __('Gültig von'); ?></th>
		<th><?php echo __('Gültig bis'); ?></th>
		<th><?php echo __('Erstellt'); ?></th>
		<th><?php echo __('Geändert'); ?></th>
		<th class="actions"><?php echo __(' '); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id']; ?></td>
			<td><?php echo $contact['name']; ?></td>
			<td><?php echo $contact['description']; ?></td>
			<td><?php echo $contact['sort']; ?></td>
			<td><?php echo $contact['valid_from']; ?></td>
			<td><?php echo $contact['valid_to']; ?></td>
			<td><?php echo $contact['created']; ?></td>
			<td><?php echo $contact['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
