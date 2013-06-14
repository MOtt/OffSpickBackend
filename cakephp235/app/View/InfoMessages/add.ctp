<div class="infoMessages form">
<?php echo $this->Form->create('InfoMessage'); ?>
	<fieldset>
		<legend><?php echo __('Info erfassen'); ?></legend>
	<?php
		echo $this->Form->input('message');
		echo $this->Form->input('valid_from');
		echo $this->Form->input('valid_to');
		echo $this->Form->input('info_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Speichern')); ?>
</div>