<div class="categoryContacts view">
<h2><?php  echo __('Kategorien / Kontakte'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kontakt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryContact['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $categoryContact['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryContact['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categoryContact['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($categoryContact['CategoryContact']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
