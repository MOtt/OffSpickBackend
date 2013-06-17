<div class="contacts view">
<h2><?php  echo __('Kontakt'); ?></h2>
	<dl>
		<dt><?php echo __('Nr'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beschreibung'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>