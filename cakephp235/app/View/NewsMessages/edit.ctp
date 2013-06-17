<div class="newsMessages form">
<?php echo $this->Form->create('NewsMessage'); ?>
	<fieldset>
		<legend><?php echo __('News bearbeiten'); ?></legend>
	<?php
		echo $this->Form->input('id', array('label' => 'Nr'));
		echo $this->Form->input('message', array('label' => 'Nachricht'));
		echo $this->Form->input('valid_from', array('label' => 'Gültig von'));
		echo $this->Form->input('valid_to', array('label' => 'Gültig bis'));
		echo $this->Form->input('news_category_id', array('label' => 'Kategorie'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>
