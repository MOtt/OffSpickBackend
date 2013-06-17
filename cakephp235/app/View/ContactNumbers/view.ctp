<div class="contactNumbers view">
<h2><?php  echo __('Kontakt-Nummer'); ?></h2>
	<dl>
		<dt><?php echo __('Kontakt'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactNumber['Contact']['id'], array('controller' => 'contacts', 'action' => 'view', $contactNumber['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonnummer'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['valid_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['valid_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kontakt'); ?></dt>
		<dd>
			<?php echo h($contactNumber['ContactNumber']['contact_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

	<div class="related">
		<h3><?php echo __('Related Category Contacts'); ?></h3>
	<?php if (!empty($contactNumber['Contact'])): ?>
		<dl>
			<dt><?php echo __('Nr'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Beschreibung'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['description']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sortierung'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['sort']; ?>
&nbsp;</dd>
		<dt><?php echo __('Gültig von'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['valid_from']; ?>
&nbsp;</dd>
		<dt><?php echo __('Gültig bis'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['valid_to']; ?>
&nbsp;</dd>
		<dt><?php echo __('Erstellt'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Geändert'); ?></dt>
		<dd>
	<?php echo $contactNumber['Contact']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
	</div>
    